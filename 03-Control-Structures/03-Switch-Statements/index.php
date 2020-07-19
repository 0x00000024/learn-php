<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example html</title>
</head>
<body>

<h2>Comparison Operators</h2>

<?php

$number = 34;

switch ($number) {
    case 34:
        echo "it is 34";
        break;
    case 35:
        echo "it is 35";
        break;
    case 36:
        echo "it is 36";
        break;
    case 37:
        echo "it is 37";
        break;
    case 38:
        echo "it is 38";
        break;
    default:
        echo "we could not find anything";
        break;
}

?>

</body>
</html>