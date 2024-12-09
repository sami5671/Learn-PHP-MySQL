<?php
$a = 12;
$b = 4;
$operation = "div";

switch ($operation) {
    case "add":
        echo "Sum: " . ($a + $b);
        break;
    case "sub":
        echo "Difference: " . ($a - $b);
        break;
    case "mul":
        echo "Product: " . ($a * $b);
        break;
    case "div":
        echo "Quotient: " . ($a / $b);
        break;
    default:
        echo "Invalid operation.";
}
?>
