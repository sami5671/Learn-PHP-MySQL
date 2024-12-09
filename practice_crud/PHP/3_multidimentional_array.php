<?php
// Multidimensional array example: Storing information about students
$students = [
    [
        "name" => "Alice",
        "age" => 20,
        "grade" => "A"
    ],
    [
        "name" => "Bob",
        "age" => 22,
        "grade" => "B"
    ],
    [
        "name" => "Charlie",
        "age" => 21,
        "grade" => "A"
    ]
];

// Looping through the multidimensional array
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Grade: " . $student["grade"] . "<br><br>";
}
?>
