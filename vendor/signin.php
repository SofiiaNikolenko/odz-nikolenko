<?php
session_start();
require_once './connect.php';

$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($_POST['password']);

$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = $login;

    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'Wrong login or password';
    header('Location: ../authorization.php');
}
