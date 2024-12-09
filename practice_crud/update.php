<?php include('dbcon.php')?>
<?php 
if (isset($_GET['id'])) {
    # code...
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        # code...
        die("Query failed: ". mysqli_error($connection));
    }else{
        $row = mysqli_fetch_assoc($result);
    }
}
?>


<?php

if (isset($_POST['update_product'])) {
    # code...

    if (isset($_GET["id_new"])) {
        # code...
        $idnew = $_GET["id_new"];
    }
    $product_n = $_POST['product_name'];
    $product_p = $_POST['product_price'];
  

    $query = "update `product` set `name`='$product_n', `price`='$product_p' where `id` = '$idnew'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        # code...
        die("query failed". mysqli_error($connection));
    }else{
        header("location:index.php?update_msg=You have updated successfully!!");
    }
}
?>
<h1 style="text-align: center;">Here You Can update the Products (<?php echo $row['name']?>)</h1>

<!-- Form to Add Products -->
<form action="update.php?id_new=<?php echo $id;?>" method="POST" style="text-align: center;"> 

    <label for="product_name">Product Name:</label><br>
    <input type="text" id="product_name" name="product_name" value="<?php echo $row['name']?>"><br>
    <label for="product_price">Product Price:</label><br>
    <input type="number" id="product_price" name="product_price" value="<?php echo $row['price']?>"><br><br>
    <input type="submit" name="update_product" value="Update Product">
</form>
