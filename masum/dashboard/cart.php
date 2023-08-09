<?php
require 'config.php';
$sql = "SELECT * FROM add_table";
$all_products = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .flex-container {
            display: flex; 
            flex-wrap: wrap;
             justify-content: space-around;

        }

        .card {
            width: calc(33.33% - 1rem);
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

    </style>

</head>

<body>


    <header></header>
    <main>
     <div class="flex-container">
     <?php
        while ($row = mysqli_fetch_assoc($all_products)) {
            ?>


                <div class="card w-96 glass">
                <figure><img src="<?php echo $row['photo']; ?>" alt="Course thumbnail!" /></figure>

                    <!-- <figure><img src=". $row['photo']." alt="Course thumbnail!" /></figure> -->
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php echo $row["title"]; ?>
                        </h2>
                        <p>
                            <?php echo $row["description"]; ?>
                        </p>
                        <p>
                            <?php echo $row["price"]; ?>
                        </p>

                        <div class="card-actions justify-end">
                            <button class="btn btn-primary ">Add to Cart</button>
                        </div>
                    </div>
                </div>

            <?php
        }
        ?>

     </div>
    </main>
    <footer></footer>


</body>

</html>