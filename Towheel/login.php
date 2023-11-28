<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" type=text/css href="style.css">
</head>

<body>
    <div id="form">
        <form name="form" action="login.php" method="post">
            <h1> Login Form</h1>
            <label> Username : </label>
            <input type="text" id=user name="user"><br><br>
            <label> Password : </label>
            <input type="Password" ,id=pass name="pass"><br><br>
            <input type="submit" id="btn" value="login" name=submit>

            <div class="account">
                <a href="signup.php">create new account</a>
                </div>

        </form>
    </div>
    
   
</body>

</html>
