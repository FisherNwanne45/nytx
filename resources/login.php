<?php
include('log.php'); // Includes Login Script

if (isset($_SESSION['login_user'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Administrator Panel</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="../images/fav.png" rel="icon">
</head>

<body>
    <div id="main">
        <a href="../index.html"><img src="../images/ato-logo-white.png" align="left" alt=""></a><br>
        <hr>
        <div id="login">
            <h2>Staff Login</h2>
            <form action="" method="post">
                <label>UserName :</label>
                <input id="name" name="username" placeholder="username" type="text">
                <label>Password :</label>
                <input id="password" name="password" placeholder="**********" type="password">
                <input name="submit" type="submit" value=" Login ">
                <span><?php echo $error; ?></span>
            </form>
        </div>
        <a href="../index.html">Go back to site</a>
    </div>
</body>

</html>