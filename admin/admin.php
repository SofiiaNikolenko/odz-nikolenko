<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <h1 class="title">Admin panel</h1>
    <?php
    echo '<div class="content">';
    ?>
    <div class="first-div">
        <h2 class="title-two">Adding products</h2>
        <form method="post" action="./add.php" enctype="multipart/form-data">
            <label>Name:</label>
            <input class="admin-input" type="text" name="name" required>
            <br>
            <label>Description:</label>
            <textarea class="admin-textarea" name="description" required></textarea>
            <br>
            <label>Price:</label>
            <input class="admin-input" type="number" name="price" required>
            <br>
            <label>Number:</label>
            <input class="admin-input" type="number" name="quantity" required>
            <br>
            <label>Image:</label>
            <input class="admin-input" type="file" name="image" required accept="image/*">
            <br>
            <label>Category:</label>

            <?php
            require_once("../vendor/connect.php");

            $sql = "SELECT * FROM `categories`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<select class='admin-input' name='category'>";
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["сategory_name"] . "'>" . $row["сategory_name"] . "</option>";
                }
                echo "</select>";
            } else {
                echo '<p>No category, add a category first</p>';
            }
            ?>
            <br>

            <button class="order-button" type="submit">Add product</button>
        </form>

        <br>
        <br>
        <br>

        <form method="post" action="add-category.php">
            <label>Category name:</label>
            <input class="admin-input" type="text" name="сategory_name" required>
            <br>
            <input class="order-button" type="submit" name="submit" value="Add">
        </form>

        <br>

        <?php
        require_once("../vendor/connect.php");

        if (isset($_GET['delete1'])) {
            $categoryId = $_GET['delete1'];
            $sql = "DELETE FROM `categories` WHERE `сategory_name` = '$categoryId'";

            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        echo "<br>";

        $sql = "SELECT * FROM `categories`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2 class='title-two'>List of categories</h2>";
            echo "<table><tr><th>Category name</th><th>Do</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["сategory_name"] . "</td>";
                echo "<td> <a href='?delete1=" . $row["сategory_name"] . "'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo '<p>There is no category</p>';
        }
        ?>
    </div>

    <?php
    require_once("../vendor/connect.php");

    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];
        $sql = "DELETE FROM `catalog` WHERE `id` = $id";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $sql = "SELECT * FROM `catalog`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div>';
        echo '<h2 class="title-two">Data in the product database</h2>';
        echo '<table>';
        echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Amount</th><th>Image</th><th>Category</th><th>Actions</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["amount"] . "</td>";
            echo '<td><img src="../uploads/' . $row["image"] . '" alt="' . $row["name"] . '" width="150" height="150"></td>';
            echo '<td>' . $row["сategory_name"] . '</td>';
            echo '<td><a href="./edit.php?id=' . $row["id"] . '">Edit</a><br><br><a href="?delete=' . $row["id"] . '">Delete</a></td>';
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo '<p>No records in the database</p>';
    }
    echo '</div>';
    echo '</div>';
    ?>
    <br>

    <a class="back-main-pg" href="../index.php" class="button">Back to the main page</a>
</body>

</html>