<?php
// set cookies
    if(isset($_POST['submit'])){
        $ok = htmlentities($_POST['username']);

        setcookie('auth', $ok);

        header('Location: loggedin.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    Name: <input type="text" name="username">
    Password: <input type="password" name="password" required><br/><br/>
    <input type="submit" value="Log Me In" name="submit">
    </form>
</body>
</html>