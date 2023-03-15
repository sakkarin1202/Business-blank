<?php

require "connect.php";

$n1 = "Cus001";
$n2 = "1'" . "or '1=1";
//$n2 = "Cus001";

$sql = "SELECT * FROM customer where CustomerID = :ID";
echo $sql;
echo "Hello";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ID', $n2);
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);
