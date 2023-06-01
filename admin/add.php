<?php
require_once("../vendor/connect.php");

$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$category = $_POST["category"];

if ($_FILES["image"]["name"]) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        header("Location: ./admin.php");
        exit;
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image = $_FILES["image"]["name"];
    } else {
        header("Location: ./admin.php");
        exit;
    }
}

$sql = "INSERT INTO `catalog` (`name`, `description`, `price`, `amount`, `image`, `сategory_name`) VALUES ('$name', '$description', '$price', '$quantity', '$image', '$category')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./admin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
