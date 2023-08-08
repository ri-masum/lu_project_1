<?php
   include 'config.php';
   $id = $_GET['id'];
   $deleteQuery = "DELETE FROM `add_table` WHERE id ='$id'";
   try {
    mysqli_query($conn, $deleteQuery);
    header("Location:add.php");
   } 
   catch (\Throwable $th) {
    echo $th;
   }


?>