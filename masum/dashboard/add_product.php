<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $Photo = $_FILES['image'];



    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    
    
    
    $image_des = "images/" . $imageName;
    
    move_uploaded_file($imageLocation, $image_des);


    $query = "INSERT INTO `add_table` (`title`, `description`, `price`, `photo`) VALUES ('$title', '$description', '$price', '$image_des')";

    if (mysqli_query($conn, $query)) {
        echo "<script> alert('Record added successfully'); </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">REHUB</a>
            <form class="d-flex" role="search">
                <button type="button" class="btn btn-dark mt-3 form-control ms-3"><a href="dashboard.php" class="text-light text-decoration-none">DashBoard</a></button>
            </form>
        </div>
    </nav>
    <!-- Form -->
    <form action="" method="POST"  enctype="multipart/form-data">
        <h2 class="text-center mt-5">Add Courses</h2>

        <div class="container-fluid border border-secondary-subtle w-75 mt-3 d-block m-auto">
            <div class="form-outline">
                <input type="text" name="title" class="form-control form-control-lg mt-3" />
                <label class="form-label">Title</label>
            </div>

            <div class="form-outline">
                <input type="text" name="description" class="form-control" />
                <label class="form-label">Description</label>
            </div>
            <div class="form-outline">
                <input type="text" name="price" class="form-control" />
                <label class="form-label">Price</label>
            </div>

            <input type="file" name="image" class="form-control " />
            <label class="form-label mb-3">Photo</label>
            <br>
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-3">Add</button>
        </div>
    </form>

    <div class="container-fluid mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>

            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = mysqli_query($conn, "SELECT * FROM `add_table`");
                while ($row = mysqli_fetch_array($sql)) {
                    echo "
                    <tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['title'] . "</td>
                        <td>" . $row['description'] . "</td>
                        <td>" . $row['price'] . "</td>
                        <td><img width='100px' src='" . $row['photo'] . "' alt='image'></td>
                        <td><a class='btn btn-dark' href='update.php?id=" . $row['id'] . "'>Update</a></td>
                        <td><a class='btn btn-dark' href='delete.php?id=" . $row['id'] . "'>Delete</a></td>            
                    </tr>
                ";
                }

                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>