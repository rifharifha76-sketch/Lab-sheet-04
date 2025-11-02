<!DOCTYPE html>
<html>
<head>
<title>PHP Lab Sheet Answers</title>
<style>
table {
    border-collapse: collapse;
    margin-top: 20px;
}
td {
    width: 50px;
    height: 50px;
}
.black {
    background-color: black;
}
.white {
    background-color: white;
}
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}
h2 {
    color: #2c3e50;
}
</style>
</head>
<body>

<h1>PHP Lab Sheet Answers</h1>

<!-- 1. Time of the day -->
<h2>1. Time of the Day</h2>
<?php
$hour = date("H");
if ($hour >= 5 && $hour < 12) {
    echo "Good Morning!";
} elseif ($hour >= 12 && $hour < 17) {
    echo "Good Afternoon!";
} elseif ($hour >= 17 && $hour < 20) {
    echo "Good Evening!";
} else {
    echo "Good Night!";
}
?>

<!-- 2. Calculator using switch -->
<h2>2. Simple Calculator</h2>
<?php
$num1 = 10;
$num2 = 5;
$operator = '+';
echo "Numbers: $num1, $num2<br>Operator: $operator<br>Result: ";
switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        echo $num1 / $num2;
        break;
    case '%':
        echo $num1 % $num2;
        break;
    default:
        echo "Invalid Operator";
}
?>

<!-- 3. While loop 10 to 1 -->
<h2>3. While Loop (10 to 1)</h2>
<?php
$i = 10;
while ($i >= 1) {
    echo $i . " ";
    $i--;
}
?>

<!-- 4. Do while loop even numbers -->
<h2>4. Do While Loop (Even Numbers 1–10)</h2>
<?php
$i = 1;
do {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
    $i++;
} while ($i <= 10);
?>

<!-- 5. For loop square numbers -->
<h2>5. For Loop (Square Numbers 1–100)</h2>
<?php
for ($i = 1; $i <= 100; $i++) {
    $square = $i * $i;
    echo "Square of $i is $square<br>";
}
?>


<!-- 6. Factorial -->
<h2>6. Factorial of a Number</h2>
<?php
$num = 5;
$fact = 1;
for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}
echo "Factorial of $num is $fact";
?>

<!-- 7. Prime number check -->
<h2>7. Prime Number Check</h2>
<?php
$num = 13;
$isPrime = true;
if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
if ($isPrime)
    echo "$num is a Prime Number";
else
    echo "$num is Not a Prime Number";
?>

<!-- 8. Chessboard -->
<h2>8. Chessboard (8 x 8)</h2>
<table border="1">
<?php
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $total = $row + $col;
        if ($total % 2 == 0)
            echo "<td class='white'></td>";
        else
            echo "<td class='black'></td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
