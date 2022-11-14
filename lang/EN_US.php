<?php
// EN_US.php
// English, United States language file

// Only load the page if it's being loaded through the index.php file.
if (!defined("INDEXED")) exit;

$lang = array(
    "error.PageNotFound" => "Requested page not found.",
    "error.BadFields" => "Uh-oh.. a couple of fields are not filled in correctly..",
    "error.Database" => "Something went wrong. Please try again later.",
    "error.UsernameNull" => "The username field must not be empty.",
    "error.PasswordNull" => "The password field must not be empty.",
    "error.CategoryMisc" => "The category could not be displayed, please try again later.",
    "error.PasswordWrong" => "Incorrect password.",
    "error.UsernameWrong" => "The specified user doesn't exist.",
    "error.CategoryNotFound" => "This category does not exist.",
    "error.CategoryThreadMisc" => "The threads in this category could not be displayed.",
    "error.CategoryEmpty" => "There are no threads in this category yet.",
    "error.AlreadyLoggedIn" => "You are already logged in, you can <a href='/logout/'>log out</a> if you want.",
    "error.UserlistMembersOnly" => "Only registered users can view the userlist. If you want to see it, <a href='%s'>signup</a> or <a href='%s'>login</a>.",
    "error.UserlistDisabled" => "Sorry, the forum administrators have decided to disable the userlist. Maybe if you ask them nicely, they'll re-enable it.",
    "error.GoBack" => "Go back",
    "error.SomethingWentWrong" => "Something went wrong.",
    "error.FailedFetchUsers" => "Failed to fetch users.",
    "error.NoUsers" => "Sadly, there are currently no users on the forum.",
    
    "nav.AdminsOnly" => "Sorry, this page is unavailable to non-admins.",
    "nav.FirstPage" => "<<",
    "nav.PrevPage" => "<",
    "nav.NextPage" => ">",
    "nav.LastPage" => ">>",
    
    // Viewing:
    "action.Generic" => "Viewing: ",
    "action.Homepage" => "Viewing: Homepage",
    "action.Userlist" => "Viewing: Userlist",
    "action.CreateAThread" => "Creating a thread...",
    "action.UserProfile" => "'s Profile", // e.g. Tormater's Profile
    "action.Settings" => "Viewing: Settings",
    "action.Panel" => "Viewing: Admin Panel",
    
    "header.Home" => "Home",
    "header.Userlist" => "Userlist",
    "header.Settings" => "Settings",
    "header.NewThread" => "New thread",
    "header.Panel" => "Admin Panel",
    "header.Logout" => "Logout",
    "header.Login" => "Login",
    "header.Signup" => "Sign up",
    "header.or" => " or ",
    "header.Hello" => "Hello, ",
    
    "homepage.CatThreads" => "Threads: ",
    
    "category.ThreadsIn" => "Threads in ",
    "category.Thread" => "Thread",
    "category.Posts" => "Posts",
    "category.CreatedBy" => "Created by",
    "category.LastPost" => "Last post",

    // Threads & Posts
    "thread.BackToCategory" => "Back to category",
    "thread.DeleteThreadBtn" => "Delete",
    "thread.UnlockThreadBtn" => "Unlock",
    "thread.LockThreadBtn" => "Lock",
    "thread.UnstickyThreadBtn" => "Unsticky",
    "thread.StickyThreadBtn" => "Sticky",
    "thread.PostInTitle" => "Posts in",
    "thread.ContentTitle" => "Content:",
    // Labels & Buttons
    "thread.PostReplyBtn" => "Post reply",
    "thread.Labels" => "Labels:",
    "label.Locked" => "Locked",
    "label.Sticky" => "Sticky",
    "post.RestoreHiddenBtn" => "Restore",
    "post.EditBtn" => "Edit",
    "post.HideBtn" => "Hide",
    "post.DeleteBtn" => "Delete",
    "post.SaveEditBtn" => "Save edit",
    "post.DiscardEditBtn" => "Discard edit",
    // Errors
    "thread.ThreadDoesntExist" => "The specified thread doesn't exist.",
    "thread.NoPosts" => "Couldn't find any posts.",
    "thread.ThreadsNoPosts" => "There are no posts in this thread.",
    "thread.LoginFirst" => "You must be signed in for any action within a thread.",
    "thread.PostSoon1" => "You tried to post too soon after a previous post. The post delay is currently",
    "thread.PostSoon2" => "seconds between posts.",
    "thread.PostEmpty" => "Your post cannot be blank.",
    "thread.PostBig1" => "Your post was too long. The maximum number of characters a post may contain is currently set to %s.",
    "thread.PostError" => "Your reply has not been saved, please try again later.",
    "thread.PostDeleteError" => "Sorry, post couldn't be deleted.",
    "thread.ThreadDataError" => "Something went wrong with resynchronizing the conversation. Perhaps there are no posts left?",
    "thread.PostHiddenError" => "Sorry, post couldn't be hidden.",
    "thread.PostRestoredError" => "Sorry, post couldn't be restored.",
    "thread.PostEditError" => "Hey, you don't have permission to edit that post.",
    "thread.ThreadDeleteError" => "Sorry, thread couldn't be deleted.",
    "thread.ThreadPostDeleteError" => "Sorry, the thread's posts couldn't be deleted.",
    "thread.ThreadLockError" => "Sorry, thread couldn't be locked.",
    "thread.ThreadStickError" => "Sorry, thread couldn't be stickied.",
    "thread.ThreadUnlockError" => "Sorry, thread couldn't be unlocked.",
    "thread.ThreadUnstickError" => "Sorry, thread couldn't be unstickied.",
    "thread.SuspendCantPost" => "Unfortunately, you're suspended. Suspended users cannot post.",
    "thread.ThreadLocked" => "Sorry, this thread is locked. Only moderators and administrators can post in it.",
    "thread.LoginToPost" => "You must be signed in to post.",
    
    // New Thread
    "newthread.Header" => "Create a thread",
    "newthread.Title" => "Title: ",
    "newthread.Category" => "Category: ",
    "newthread.Content" => "Content:",
    "newthread.CreateBtn" => "Create thread",
    // Error
    "newthread.LoginToCreate" => "Sorry, you have to be <a href='%s'>logged in</a> to create a thread.",
    "newthread.SuspendCantCreate" => "Unfortunately, you're suspended. Suspended users cannot create a thread.",
    "newthread.TitleEmpty" => "Your title cannot be blank.",
    "newthread.TitleBig1" => "Your title was too long. The maximum number of characters a title may contain is currently set to ",
    "newthread.TitleBig2" => ".",
    "newthread.PostEmpty" => "Your post cannot be blank.",
    "newthread.PostBig1" => "Your post was too long. The maximum number of characters a post may contain is currently set to ",
    "newthread.PostBig2" =>  ".",
    "newthread.InvalidCategory" => "Invalid category selection. Please select a category that actually exists.",
    "newthread.PostSoon1" => "You tried to post too soon after a previous post. The post delay is currently",
    "newthread.PostSoon2" => "seconds between posts.",
    "newthread.CreateError" => "An error occured while creating your thread. Please try again later.",
    "newthread.InsertThreadError" => "An error occured while inserting your thread. Please try again later.",
    "newthread.InsertPostError" => "An error occured while inserting your post. Please try again later.",
    "newthread.SuccessCreate1" => "You have successfully created",
    "newthread.SuccessCreate2" => "your new thread.",
    "newthread.DataError" => "Error while selecting from database. Please try again later.",
    "newthread.NoCategoryAdmin" => "You have not created categories yet.",
    "newthread.NoCategoryUser" => "Before you can post a topic, you must wait for an admin to create some categories.",
    
    // Admin panel
    "panel.ForumSettings" => "Forum Settings",
    "panel.BasicSettings" => "Basic Settings",
    "panel.NewForumName" => "New forum name",
    "panel.NewLang" => "Select language",
    "panel.NewTheme" => "Select theme",
    "panel.AdvancedSettings" => "Advanced Settings",
    "panel.ThreadsPerPage" => "Threads per page:",
    "panel.PostPerPage" => "Post per page:",
    "panel.Userlist" => "Enable userlist",
    "panel.UserlistMemberOnly" => "Let only members view userlist",
    "panel.EnabledBtn" => "Enabled",
    "panel.ChangeFooter" => "Change footer",
    "panel.ChangeSettingsBtn" => "Change settings",
    "panel.ChangesSaved" => "Your changes were saved.",
    "panel.ChangeError" => "Some fields are left blank, or something went wrong.",
    // Admin panel / Users
    "panel.Users" => "Users",
    // Admin panel / Categories
    "panel.Categories" => "Categories",
    "panel.CreateACategory" => "Create a category",
    "panel.CategoryName" => "Category name: ",
    "panel.CategoryDescription" => "Category description: ",
    "panel.CategoryEditBtn" => "Edit",
    "panel.CategoryDeleteBtn" => "Delete",
    "panel.AddCategory" => "Add category",
    "panel.InputCategoryTitle" => "Title",
    "panel.InputCategoryDesc" => "Description",
    "panel.CreateCategoryBtn" => "Create category",
    "panel.SuccessAddedCategory" => "New category successfully added.",
    "panel.EditCategory" => "Edit category",
    "panel.EditCategoryBtn" => "Edit category",
    "panel.EditCategoryDisBtn" => "Discard edit",
    "panel.CategoryNameBlank" => "The category name cannot be blank.",
    "panel.CategoryDescBlank" => "The category description cannot be blank.",
    "panel.CantUpdateCategory" => "Sorry, the category couldn't be updated. Try again later.",
    "panel.SuccessUpdateCategory" => "The category was successfully updated.",
    "panel.DeleteCategory" => "Delete category",
    "panel.CategoryDataWillGone" => "All threads and posts in this category will be gone forever...",
    "panel.CategoryDeleteLastCheck" => "Are you sure?",
    "panel.CantDeleteCategory" => "Sorry, the category couldn't be deleted. Try again later.",
    "panel.DeleteCategoryBtn" => "Delete category",
    "panel.DeleteCategoryBackBtn" => "Go back",
    "panel.SuccessDeleteCategory" => "Successfully deleted.",
    "panel.NoNewCategoriesCreate" => "Sorry, no more new categories can be created.",
    
    // User register
    "register.Header" => "Sign up",
    "register.Username" => "Username",
    "register.UsernameDesc" => "(3-24 characters, alphanumeric)",
    "register.Email" => "Email",
    "register.Password" => "Password",
    "register.PasswordDesc" => "(minimum %s characters)",
    "register.PasswordConf" => "Confirm Password",
    "register.Submit" => "Register",
    "register.Success" => "Successfully registered. You can now <a href='%s'>log in</a> and start posting!",
    "error.UsernameAlphNum" => "The username can only contain alphanumeric characters.",
    "error.UsernameSmall" => "The username must be at least 3 characters.",
    "error.UsernameBig" => "The username cannot be longer than 24 characters.",
    "register.UsernameExists" => "This username already exists.",
    "register.EmailExists" => "An account with this email already exists.",
    "register.InvalidEmailFormat" => "Invalid email.",
    "register.EmailEmpty" => "The email field must not be empty.",
    "register.PasswordEmpty" => "The password field must not be empty.",
    "register.ConfirmPasswordEmpty" => "The confirm password field must not be empty.",
    "register.ConfirmPasswordWrong" => "The confirmed password isn't the same as the password.",
    
    // User login
    "login.Header" => "Log in",
    "login.Username" => "Username / Email",
    "login.Password" => "Password",
    "login.Submit" => "Log in",
    "login.WelcomeStart" => "Welcome, ",
    "login.WelcomeEnd" => ". <a href='%s'>Proceed to the forum overview</a>.",

    // User page
    "user.FaildFindUser" => "Sorry, that user couldn't be displayed. Try again later.",
    "user.NoSuchUser" => "Sorry, that user doesn't exist.",
    "user.FaildChangeRole" => "Failed to change role.",
    "user.ViewingProfile" => "Viewing profile ",
    "user.OptionAdmin" => "Administrator",
    "user.OptionMod" => "Moderator",
    "user.OptionMember" => "Member",
    "user.OptionSuspended" => "Suspended",
    "user.ChangeRole" => "Change role",
    "user.TitleRegistered" => "Registered:",
    "user.TitleLastActive" => "Last active:",
    "user.TitlePosts" => "Posts:",
    "user.TitleThreads" => "Threads:",
    "user.TitleVerified" => "Verified:",
    "user.VerifiedYes" => "Yes",
    "user.VerifiedNo" => "No",    

    // Roles
    "role.Admin" => "Administrator",
    "role.Mod" => "Moderator",
    "role.Member" => "Member",
    "role.Suspend" => "Suspended",

    // User settings
    "settings.LoginFirst" => "You must be logged in to change user settings.",
    "settings.CurrentPassword" => "Current password",
    // Set post color
    "settings.PostColor" => "Post color",
    "settings.SetColorError" => "Sorry, couldn't set requested color.",
    "settings.SetColorSuccess" => "Successfully set post color.",
    // Change username
    "settings.ChangeUsername" => "Change Username",
    "settings.NewUsername" => "New Username",
    "settings.ChangeUsernameBtn" => "Change Username",
    "settings.NewUsernameEmpty" => "New username cannot be empty.",
    "settings.PasswordEmpty" => "Password cannot be empty.",
    "settings.NewUsernameSame" => "New username cannot be the same as old username.",
    "settings.NewUsernameBig" => "New username cannot be longer than 24 characters.",
    "settings.NewUsernameNonAlph" => "New username cannot contain non-alphanumeric characters.",
    "settings.NewUsernameError" => "Unable to change username.",
    "settings.NewUsernameChanged" => "Username has been changed.",
    // Change password
    "settings.ChangePassword" => "Change Password",
    "settings.NewPassword" => "New Password",
    "settings.ConfirmNewPassword" => "Confirm New Password",
    "settings.ChangePasswordBtn" => "Change Password",
    "settings.NewPasswordEmpty" => "New password cannot be empty.",
    "settings.ConfirmNewPasswordEmpty" => "Confirm new password cannot be empty.",
    "settings.OldPasswordEmpty" => "Current password cannot be empty.",
    "settings.ConfirmNewPasswordError" => "Confirm new password is not the same.",
    "settings.ChangePasswordError" => "Unable to change password.",
    "settings.ChangePasswordChanged" => "Password has been changed.",

    // Time
    "time.Never" => "Never",
    "time.JustNow" => "Just now",
    "time.1SecAgo" => "1 second ago",
    "time.SecAgo" => "seconds ago",
    "time.1MinAgo" => "1 minute ago",
    "time.MinAgo" => "minutes ago",
    "time.1HrAgo" => "1 hour ago",
    "time.HrsAgo" => "hours ago",
    "time.1DayAgo" => "1 day ago",
    "time.DaysAgo" => "days ago",
    "time.1WeekAgo" => "1 week ago",
    "time.WeeksAgo" => "weeks ago",
    "time.1MonthAgo" => "1 month ago",
    "time.MonthsAgo" => "months ago",
    "time.1YearAgo" => "1 year ago",
    "time.YearsAgo" => "years ago",
    
);

?>
