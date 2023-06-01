<?php

session_start();
require_once './connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$result = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'");

if (mysqli_num_rows($result) > 0) {
    $_SESSION['message'] = 'A user with this login or email already exists';
    header('Location: ../register.php');
    exit();
}

if ($password === $password_confirm) {
    $password = md5($password);

    mysqli_query($conn, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

    $_SESSION['message'] = 'Registration was successful!';
    header('Location: ../authorization.php');
} else {
    $_SESSION['message'] = 'Passwords do not match';
    header('Location: ../register.php');
}
