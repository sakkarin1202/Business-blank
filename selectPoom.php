<?php
require 'connect.php';

$n1 = "Cus002";
$n2 = 1'" . " or '4=4";
// $sql = "SELECT * FROM customer where CustomerID = '" .$n2. "'";

$sql = "SELECT * FROM customer where CustomerID = :poom";
// :poom เป็นตัวแปร ไว้ผูกกับตัวแปรที่ต้องการ bindParam

echo ($sql);
echo "<br>";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':poom', $n2);

$stmt->execute();
$result = $stmt->fetchAll();

echo "nee";
print_r($result);
