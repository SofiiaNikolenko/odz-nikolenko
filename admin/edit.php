<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<?php
require_once("../vendor/connect.php");

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
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
    } else {
        $sql = "SELECT `image` FROM `catalog` WHERE `id` = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $image = $row["image"];
    }

    $sql = "UPDATE `catalog` SET `name`='$name',`description`='$description',`price`=$price,`amount`=$amount,`image`='$image', `сategory_name`='$category' WHERE `id` = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ./admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `catalog` WHERE `id` = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
} else {
    echo "Error: Record ID is not specified";
    exit;
}


echo '<div class="content-edit">';
echo '<form method="post" action="edit.php" enctype="multipart/form-data">';
echo '<input class="admin-input" type="hidden" name="id" value="' . $row["id"] . '">';

echo '<label>Name:</label>';
echo '<input class="admin-input" type="text" name="name" value="' . $row["name"] . '" required>';
echo '<br>';

echo '<label>Description:</label>';
echo '<textarea class="admin-textarea" name="description" required>' . $row["description"] . '</textarea>';
echo '<br>';

echo '<label>Price:</label>';
echo '<input class="admin-input" type="number" name="price" value="' . $row["price"] . '" required>';
echo '<br>';

echo '<label class="amoung">Amoung:</label>';
echo '<input class="admin-input" type="number" name="amount" value="' . $row["amount"] . '" required>';
echo '<br>';

echo '<label>Image:</label>';
echo '<input class="admin-input" type="file" name="image" accept="image/*">';
echo '<br>';
echo '<br>';

echo '<img class="admin-edit-img" src="../uploads/' . $row["image"] . '" alt="' . $row["name"] . '" width="150" height="150">';
echo '<br>';

echo '<label>Category:</label>';
echo '<select class="admin-input" name="category">';
$sql = "SELECT * FROM `categories`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["сategory_name"] . '">' . $row["сategory_name"] . '</option>';
    }
}
echo '</select>';
echo '<br>';

echo '<button class="order-button" type="submit" name="submit">Update</button>';

echo '</form>';
echo '</div>';

$conn->close();

?>