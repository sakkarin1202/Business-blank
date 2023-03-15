<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>

<?php

require "connect.php";
$sql = "SELECT * FROM customer";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);

?>
</body>
</html>