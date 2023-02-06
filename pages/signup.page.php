<?php
// signup.page.php
// Allows users to create accounts.

// Only load the page if it's being loaded through the index.php file.
if (!defined("INDEXED")) exit;

include 'header.php';

echo '<h2>' . $lang["register.Header"] . '</h2>';

// If registration is closed, disallow signups.
if ($config["registration"] == "closed") {
    message($lang["register.Closed"]);
    include "footer.php";
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$errors = array();
	
	if (isset($_POST['user_name']))
	{
		validateUsername($_POST["user_name"]);
	}
	else
	{
		$errors[] = $lang["error.UsernameNull"];
	}

	if (isset($_POST['user_email']))
	{
		validateEmail($_POST["user_email"]);
	}
	else
	{
		$errors[] = $lang["register.EmailEmpty"];
	}

	if (isset($_POST["user_pass"]))
	{
		validatePassword($_POST["user_pass"], $_POST["user_pass_check"]);
	}
    else
    {
        $errors[] = $lang["register.PasswordEmpty"];
    }

	if (($config["captchaEnabled"] == true) and ($_SESSION["captcha"] != $_POST["captcha"]))
    {
        $errors[] = $lang["register.CaptchaWrong"];
    }

    // Make sure this user hasn't already created the maximum number of accounts.
    $altCheck = $db->query("SELECT ip FROM users WHERE ip='" . $db->real_escape_string(hashstring($_SERVER["REMOTE_ADDR"])) . "'");

    if ($altCheck->num_rows >= $config["maxAccountsPerIP"]) {
        $errors[] = $lang["register.TooManyAccounts"];
    }

	if(!empty($errors))
	{
		echo $lang["error.BadFields"];
		echo '<ul>';
		foreach($errors as $key => $value)
		{
			echo '<li>' . $value . '</li>';
		}
		echo '</ul>';
	}
	else
	{
        registerUser();
	}
}

echo "<div class='formcontainer'><form method='post' action=''>
<div class='forminput'><label>" . $lang["register.Username"] . "</label><input type='text' name='user_name' autocomplete='username' value='" . $_POST["user_name"] . "' /></div>
<div class='forminput'><small class='fieldhint'>" . $lang["register.UsernameDesc"] . "</small></div>
<div class='forminput'><label>" . $lang["register.Email"] . "</label><input type='email' name='user_email' value='" . $_POST["user_email"] . "'></div>
<div class='forminput'><small class='fieldhint'>" . $lang["register.EmailDesc"] . "</small></div>
<div class='forminput'><label>" . $lang["register.Password"] . "</label><input type='password' name='user_pass' value='" . $_POST["user_pass"] . "'></div>
<div class='forminput'><small class='fieldhint'>" . sprintf($lang["register.PasswordDesc"], "6") . "</small></div>
<div class='forminput'><label>" . $lang["register.PasswordConf"] . "</label><input type='password' name='user_pass_check' value='" . $_POST["user_pass_check"] . "'></div>";
if ($config["captchaEnabled"] == true) {
    echo "<br/><div class='forminput'><label>" . $lang["register.Captcha"] . "</label><input type='text' name='captcha'></div>";
    echo "<small class='captchalabel'>" . $lang["register.CaptchaHint"] . "</small>";
    $_SESSION["captcha"] = generateCaptcha($config["captchaLength"]);
}
echo "<div class='forminput'><label></label><input type='submit' class='buttonbig' value='" . $lang["register.Submit"] . "' /></div>
</form></div>";

include 'footer.php';

// Validate usernames.
function validateUsername($username) {
    global $db, $lang, $errors;

    $res = $db->query("SELECT salt FROM users WHERE username = '" . $db->real_escape_string($username) . "'");

	if($res->num_rows)
	{
		$errors[] = $lang["register.UsernameExists"];
	}
	if(!checkUsername($username))
	{
		$errors[] = $lang["error.UsernameAlphNum"];
	}
	if(strlen($username) < 3)
	{
		$errors[] = $lang["error.UsernameSmall"];
	}
	if(strlen($username) > 24)
	{
		$errors[] = $lang["error.UsernameBig"];
	}
}

// Validate email addresses.
function validateEmail($email) {
    global $db, $lang, $errors;

    $res = $db->query("SELECT * FROM users WHERE email ='". $db->real_escape_string($email) ."'");

	if ($res->num_rows)
	{
		$errors[] = $lang["register.EmailExists"];
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$errors[] = $lang["register.InvalidEmailFormat"];
	}
    if (strlen($email) < 1)
    {
        $errors[] = $lang["register.EmailShort"];
    }
    if (strlen($email) > 254)
    {
        $errors[] = $lang["register.EmailLong"];
    }
}

// Validate passwords.
function validatePassword($password, $passwordCheck) {
    global $lang, $errors;
    if (strlen($password) < 6)
	{
		$errors[] = $lang["register.PasswordSmall"];
	}
	if (empty($passwordCheck))
	{
		$errors[] = $lang["register.ConfirmPasswordEmpty"];
	}
    if ($password != $passwordCheck)
	{
		$errors[] = $lang["register.ConfirmPasswordWrong"];
	}
}

// Create a new user account.
function registerUser() {
    global $db, $lang, $config;
    // Construct the query.
	// First we need to generate our salt in order to salt the password.
	$salt = random_str(64);
	$username = $_POST['user_name'];
	$email = $_POST['user_email'];
	$password = hashstring($salt . $_POST['user_pass']);
	$role = "Member";
	$jointime = time();
    $lastactive = time();
	$color = '1';
	$ip = hashstring($_SERVER["REMOTE_ADDR"]);
    if ($config["registration"] == "open")
    {
	    $verified = "1";
    }
    elseif ($config["registration"] == "approval")
    {
        $verified = "0";
    }
		
	$result = $db->query("INSERT INTO users (username, email, password, role, jointime, lastactive, color, ip, salt, verified) VALUES('" . $db->real_escape_string($username) . "', '" . $db->real_escape_string($email) . "', '" . $db->real_escape_string($password) . "', '" . $db->real_escape_string($role) . "', '" . $db->real_escape_string($jointime) . "', '" . $db->real_escape_string($lastactive) . "', '" . $db->real_escape_string($color) . "', '" . $db->real_escape_string($ip) . "', '" . $db->real_escape_string($salt) . "', '" . $db->real_escape_string($verified) . "')");
						
	if (!$result)
	{
		echo $lang["error.Database"];
	}
	elseif ($config["registration"] == "open")
	{
		printf($lang["register.Success"], genURL("login"));
		include "footer.php";
		exit;
	}
    elseif ($config["registration"] == "approval")
    {
        printf($lang["register.Approval"], genURL("login"));
        include "footer.php";
        exit;
    }
}

?>
