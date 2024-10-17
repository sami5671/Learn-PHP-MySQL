<?php include('dbcon.php'); ?>
<?php

if (isset($_POST['add_students'])) {

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    // validate the data
    if ($fname == "" || empty($fname)) {
        # code...
        header('location:index.php?message=You must provide first name');
    }else{

        $query = "insert into `students` (`first_name`, `last_name`, `age`) values ('$fname', '$lname', '$age')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            # code...
            die("Query failed: " . mysqli_error($connection));

        }else{
            header("Location:index.php?insert_msg=You have inserted data successfully!!");
        }
    }
}

?>