<?php
include ('dbcon.php')
?>

<?php
if(isset($_POST['add_product'])){
    $product_name = $_POST ['product_name'];
    $product_price = $_POST ['product_price'];

        $query = "INSERT INTO product (name, price) VALUES ('$product_name', '$product_price')";
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            # code...
            die("Error: ". mysqli_error($connection));
        }else{
            header('location:index.php?message=Product added successfully');
        }
    }
?>
