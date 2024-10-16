<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<div class="box1">
    <h2>All Students</h2>
    <button class="btn btn-primary"> Add Students</button>
</div>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>

        <?php
        
        $query = "select * from `students`";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed: ". mysqli_error($connection));
        }else{

            while($row = mysqli_fetch_array($result)){

                ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['age']; ?></td>
            </tr>
                <?php
            }
        }
        ?>

        </tbody>
    </table>
<?php include('footer.php'); ?>