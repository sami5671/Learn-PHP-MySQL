<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form method="POST" action="">
        <label for="a">Enter First Number:</label>
        <input type="number" name="a" id="a" required><br><br>

        <label for="b">Enter Second Number:</label>
        <input type="number" name="b" id="b" required><br><br>

        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $operation = $_POST['operation'];

        // Perform the operation based on user input
        switch ($operation) {
            case "add":
                echo "<h3>Result: " . ($a + $b) . "</h3>";
                break;
            case "sub":
                echo "<h3>Result: " . ($a - $b) . "</h3>";
                break;
            case "mul":
                echo "<h3>Result: " . ($a * $b) . "</h3>";
                break;
            case "div":
                if ($b != 0) {
                    echo "<h3>Result: " . ($a / $b) . "</h3>";
                } else {
                    echo "<h3>Error: Division by zero is not allowed.</h3>";
                }
                break;
            default:
                echo "<h3>Invalid operation.</h3>";
        }
    }
    ?>
</body>
</html>
