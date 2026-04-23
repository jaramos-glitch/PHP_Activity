<!DOCTYPE html>
<html>
<head>
    <title>My PHP Activities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #2c3e50;
            margin-top: 40px;
        }
        .output {
            background: #ffffff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Activity 1: Basic Output</h2>
<div class="output">
<?php
echo "Name: Joey Ann Ramos <br>";
print "Course: BSIT";
?>
</div>

<div class="notes">
1. The symbol used to end a PHP statement is a semicolon <br>
2. The faster one is echo because it simply outputs text.
</div>

<h2>Activity 2: Multiple Outputs</h2>
<div class="output">
<?php
echo "Welcome to my PHP mini project!<br>";
echo "I'm Owi and this is my first PHP project.<br>";
echo "I love learning and expanding my wisdom.";
?>
</div>

<h2>Activity 3: Declaring Variables</h2>
<div class="output">
<?php
$name = "Joey Ann Ramos";
$age = 18;
$course = "BSIT";

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Course: " . $course;
?>
</div>
<h2>Activity 4: Variable Rules</h2>
<div class="output">
<?php
$name = "Ana";   
$age = 18;       
echo $age;     
?> 
</div>

<h2>Activity 5: Arithmetic Operators</h2>
<div class="output">
<?php
$a = 10;
$b = 3;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b);
?>
</div>

<h2>Activity 6: Assignment Operators</h2>
<div class="output">
<?php
$x = 5;
$x += 3;
echo $x;
?>
</div>

<h2>Activity 7: Comparison Operators</h2>
<div class="output">
<?php
$a = 10;
$b = 5;

var_dump($a > $b);
echo "<br>";
var_dump($a == $b);
?>
</div>

<h2>Mini Project: Calculator</h2>
<div class="output">
<?php
$num1 = 8;
$num2 = 4;

echo "Sum: " . ($num1 + $num2) . "<br>";
echo "Difference: " . ($num1 - $num2) . "<br>";
echo "Product: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2);
?>
</div>

</body>
</html>