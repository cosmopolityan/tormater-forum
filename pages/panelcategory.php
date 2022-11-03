<?php
// panelcategory.php
// Creates a new category.

// Only load the page if it's being loaded through the index.php file.
if (!defined("INDEXED")) exit;

// Check how many categories there are. If the limit has been reached show a message.
$catcheck = $db->query("SELECT 1 FROM categories");
if (($catcheck->num_rows) >= $config["maxCats"]) {
	message("Sorry, no more new categories can be created at this time.");
	include "footer.php";
	exit;
}

if($_SERVER['REQUEST_METHOD'] != 'POST')
{

$result = $db->query("SELECT * FROM categories");
	echo '<h2>Categories</h2>';
    while($row = $result->fetch_assoc()) {
    	$numthreads = $db->query("SELECT * FROM threads WHERE category='" . $row["categoryid"] . "'");
    	$number = $numthreads->num_rows;
    	echo '<div class="category"><tr>';
    		echo '<td class="leftpart">';
    		echo '<h3><span>' . htmlspecialchars($row["categoryname"]) . ' (#' . $row["categoryid"] . ')</span></h3>';
			echo '<div>' . $row["categorydescription"] . '</div>';
    		echo '<div>' . $lang["homepage.CatThreads"] . $number . '</div>';
    	echo '</tr></div>';
    }
	echo "
    <h3>Create a category</h3>
    <div class='formcontainer'><form method='post' action=''>
		<div class='forminput'><label>Title</label><input type='text' name='cat_name'></div>
		<div class='forminput'><label>Description</label></div>
		<div class='forminput'><textarea name='cat_description'></textarea></div>
		<div class='forminput'><input type='submit' class='buttonbig' value='Create category'></div>
		</form></div>";
}

else
{

    // Ensure the name and description aren't empty.
    if (!$_POST["cat_name"]) {
    	message("The category name cannot be blank.");
    }
    
    elseif (!$_POST["cat_description"]) {
    	message("The category description cannot be blank.");
    }
    
    else {
    $result = $db->query("INSERT INTO categories (categoryname, categorydescription) VALUES ('" . $db->real_escape_string($_POST['cat_name']) . "', '" . $db->real_escape_string($_POST['cat_description']) . "')");
    
    	if(!$result)
    	{
        	echo "Something went wrong.";
    	}
    
    	else
    	{
        	echo "New category successfully added. Return to the <a href='/'>main page</a>?";
    	}
    }
}

?>