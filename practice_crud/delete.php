<?php include('dbcon.php')?>

<?php 

$id = $_GET['id'];
$query = "DELETE FROM product WHERE id = $id";
$result = mysqli_query($connection, $query);
if (!$result) {
    # code...
    die("Couldn't delete product". mysqli_error($connection));
}else{
    header("location: index.php?delete_msg=You deleted product successfully");
}

?>