<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example html</title>
</head>
<body>

<?php

function greeting($message) {
    echo $message . "<br>";
}

greeting("hi");

function addNumbers($number1, $number2) {
    $sum = $number1 + $number2;
    echo $sum;
}

addNumbers(1, 2);

?>

</body>
</html>