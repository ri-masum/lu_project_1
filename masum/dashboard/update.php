<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    $query = "UPDATE `add_table` SET `title`='$title', `description`='$description', `price`='$price' WHERE `id`='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script> alert('Record updated successfully'); </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM `add_table` WHERE `id`='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: home.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">REHUB</a>
            <form class="d-flex" role="search">
                <button type="button" class="btn btn-dark mt-3 form-control ms-3"><a href="dashboard.php" class="text-light text-decoration-none">DashBoard</a></button>
                <button type="button" class="btn btn-dark mt-3 form-control ms-3"><a href="add_product.php" class="text-light text-decoration-none">Add More</a></button>
            </form>
        </div>
    </nav>
    <!-- Form -->
    <form action="" method="POST">
        <h2 class="text-center mt-5">Update Item</h2>

        <div class="container-fluid border border-secondary-subtle w-75 mt-3 d-block m-auto">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="form-outline">
                <input type="text" name="title" class="form-control form-control-lg mt-3" value="<?php echo $row['title']; ?>" />
                <label class="form-label">Title</label>
            </div>

            <div class="form-outline">
                <input type="text" name="description" class="form-control" value="<?php echo $row['description']; ?>" />
                <label class="form-label">Description</label>
            </div>
            <div class="form-outline">
                <input type="text" name="price" class="form-control" value="<?php echo $row['price']; ?>" />
                <label class="form-label">Price</label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mb-3">Update</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
