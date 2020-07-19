<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example html</title>
</head>
<body>

<?php

// Normal Array
$nameArr = array('Jose', 'Maria', 'Ben');

print_r($nameArr);

echo "<br>";

// Associative Array
$nameAssoc = array("first_name" => 'Ethan', "last_name" => 'Yu');

print_r($nameAssoc);

echo "<br>";

echo $nameAssoc['first_name'] . $nameAssoc['last_name'];

?>

</body>
</html>