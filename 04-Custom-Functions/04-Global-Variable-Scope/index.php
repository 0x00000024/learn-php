<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example html</title>
</head>
<body>

<?php

$x = "outside"; // Global

function convert()
{
    global $x;
    $x = "inside"; // Local
}

echo $x . "<br>";

convert();

echo $x . "<br>";

?>

</body>
</html>