<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<?php

if (isset($_GET['id'])) {
    # code...
    $id = $_GET['id'];

    $query = "select * from `students` where `id` = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        # code...
        die("query failed". mysqli_error($connection));
    }else{
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php

if (isset($_POST['update_students'])) {
    # code...

    if (isset($_GET["id_new"])) {
        # code...
        $idnew = $_GET["id_new"];
    }
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    $query = "update `students` set `first_name`='$fname', `last_name`='$lname', `age`='$age' where `id` = '$idnew'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        # code...
        die("query failed". mysqli_error($connection));
    }else{
        header("location:index.php?update_msg=You have updated successfully!!");
    }
}
?>

<form action="update_page.php?id_new=<?php echo $id; ?>" method="POST">

 <!-- form field -->
 <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row["first_name"]  ?>">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row["last_name"]  ?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row["age"]  ?>">
    </div>
      <!-- form field -->
      <input type="submit" class="btn btn-success" name="update_students" value="Update">

</form>



<?php include('footer.php'); ?>