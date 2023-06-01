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
    <title>Registration</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/authorization.css">
</head>

<body>
    <div class="div-form">
        <form action="./vendor/signup.php" method="post" onsubmit="return validatePassword()">
            <label>Your name</label>
            <input type="text" name="full_name" placeholder="Enter your name" required>
            <label>Login</label>
            <input type="text" name="login" placeholder="Enter your login" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <label>Confirm password</label>
            <input type="password" name="password_confirm" placeholder="Confirm your password" required>
            <button type="submit" class="order-button">Enter</button>
            <p>
                Already have an account? - <a href="./authorization.php">Log in</a>!
            </p>
            <?php
            if (!empty($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>

        </form>
    </div>

    <script src="./js/check-password.js"></script>

</body>

</html>