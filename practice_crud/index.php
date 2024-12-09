<?php include("dbcon.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Of Product</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Here You Can Find Prices of All</h1>

    <!-- Form to Add Products -->
    <form action="insert.php" method="POST" style="text-align: center;"> 
        <h2>Add Product</h2>
        <label for="product_name">Product Name:</label><br>
        <input type="text" id="product_name" name="product_name" required><br>
        <label for="product_price">Product Price:</label><br>
        <input type="number" id="product_price" name="product_price" required><br><br>
        <input type="submit" name="add_product" value="Add Product">
    </form>

    <!-- Table to Display Products -->
    <table>
        <thead> 
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM product";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("Error: " . mysqli_error($connection));
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['price']}</td>
                        <td>
                            <a href='update.php?id={$row['id']}'>Update</a>
                            <a href='delete.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
                }
            }
            ?>
        </tbody> 
    </table>
</body>
</html>
