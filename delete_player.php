<?php include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM player WHERE id = '$id' ";
$data = mysqli_query($conn, $query);

if($data)
{
    echo "<script> alert ('Delete Data')</script>";
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/sports/detail.php" />
    <?php
}
else
{
    echo "<script> alert ('Not Delete Data')</script>";
}
?>