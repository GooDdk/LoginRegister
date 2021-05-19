<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<a href="index.php">HOME</a>

	<form class="center" action="includes/login.inc.php" method="POST">
		<input name="username" placeholder="Enter username" type="text">
		<input name="password" placeholder="Enter password" type="password">
		<button name="submit" type="submit">Login</button>
	</form>

	<?php
			if (isset($_GET['error']))
			{
    			if ($_GET['error'] == "emptyinputslogin")
    			{
        			echo '<div class="alert alert-danger">Заполните пустые поля!</div>';
    			}
			}
	?>
</body>
</html>