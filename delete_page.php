<?php include('dbcon.php'); ?>

<?php

if (isset($_GET['id'])) {
    # code...
    $id = $_GET['id'];

    $query = "delete from `students` where `id` = '$id' ";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed". mysqli_error($connection));
    } else {
        header("location:index.php?delete_msg=You have deleted the record!!");
    }
}

?>