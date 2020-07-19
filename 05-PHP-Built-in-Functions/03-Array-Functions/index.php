<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example html</title>
</head>
<body>

<?php

$list = [78, 34, 56, 12];

echo max($list) . "<br>";

echo min($list) . "<br>";

sort($list);

print_r($list);

?>

</body>
</html>