<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example html</title>
</head>
<body>

<?php

function addNumbers($number1, $number2) {
    $sum = $number1 + $number2;
    return $sum;
}

$result = addNumbers(1, 2);

echo $result . "<br>";

?>

</body>
</html>