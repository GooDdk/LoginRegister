<?php
session_start();

if (isset($_SESSION["id"]))
{
?>

    <!DOCTYPE html>
    <html>
    <head>
    	<title>Welcome</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <a href="index.php">HOME</a>

        <div class="center">
            <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
            <a href="profile.php">Profile</a>
            <a href="includes/logout.inc.php">Logout</a>
        </div>
    </body>
    </html>

<?php
}
else
{
?>

 	<!DOCTYPE html>
    <html>
    <head>
    	<title>Welcome</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <a href="index.php">HOME</a>
        
        <div class="center">
    	   <a href="register.php">Sign Up</a>
    	   <a href="login.php">Login</a>
        </div>
    </body>
    </html>

<?php   
}
?>