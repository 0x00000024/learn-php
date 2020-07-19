<?php
// $_POST: super global variable, associative array
if (isset($_POST['submit'])) {
    echo "It works!" . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example html</title>
</head>
<body>

<form action="index.php" method="post">
    <input type="text" placeholder="Enter Username"><br>
    <input type="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit"><br>
</form>

</body>
</html>