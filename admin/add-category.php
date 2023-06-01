<?php
require_once("../vendor/connect.php");

if (isset($_POST['submit'])) {
    $categoryName = $_POST['сategory_name'];

    $sql = "INSERT INTO `categories` (`сategory_name`) VALUES ('$categoryName')";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
