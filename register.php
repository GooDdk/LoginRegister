<!DOCTYPE html>
<html>
    <head>
    <title>Sign up</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <a href="index.php">HOME</a>

            <form class="center" action="includes/register.inc.php" method="POST">
                <input name="username" placeholder="Enter username" type="text">
                <input name="password" placeholder="Enter password" type="password">
                <input name="repeat_password" placeholder="Repeat Password" type="password">
                <button name="submit" type="submit">Sign up!</button>
            </form>

            <?php
                if(isset($_GET["registration"]))
                {
                    if ($_GET["registration"] == "success")
                    {
                        echo '<div class="alert alert-success">Success!</div>';

                    }
                }
                if(isset($_GET["error"]))
                {
                    if ($_GET["error"] == "passwordsmismatch")
                    {
                        echo '<div class="alert alert-danger">Пароли не совпадают!</div>';

                    }
                    else if ($_GET["error"] == "stmt")
                    {
                        echo '<div class="alert alert-danger">Трабла в STMT</div>';
                    }
                    else if ($_GET["error"] == "emptyinputs")
                    {
                        echo '<div class="alert alert-danger">Заполните все поля!</div>';
                    }
                    else if ($_GET["error"] == "logintaken")
                    {
                        echo '<div class="alert alert-danger">Логин уже используется</div>';
                    }
                    else if ($_GET["error"] == "incorrectlogin")
                    {
                        echo '<div class="alert alert-danger">Логин должен содержать только буквы и цифры!</div>';
                    }
                }

            ?>
    </body>
</html>
