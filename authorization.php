<?php
session_start();

if (!empty($_SESSION['user'])) {
    header('Location: index.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/authorization.css">

</head>

<body>
    <div class="div-form">
        <form action="vendor/signin.php" method="post">
            <label>Login</label>
            <input type="text" name="login" placeholder="Enter your login" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" class="order-button">Enter</button>
            <p>
                Don't have an account? - <a href="./register.php">Sign up</a>!
            </p>

            <?php
            if (!empty($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>

</html>