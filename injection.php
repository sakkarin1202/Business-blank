<?php
require 'connect.php';

$n1 = "Cus001";
$n2 = "1'" . " or '4=4";
$n3 = "Cus001 or 2=2";
$n4 = "1'" . "or '1=1";
// $sql = "SELECT * FROM customer where CustomerID = '" .$n2. "'";

$sql = "SELECT * FROM customer where CustomerID =:poom";
// :poom เป็นตัวแปร ไว้ผูกกับตัวแปรที่ต้องการ bindParam

echo ($sql);
echo "<br>";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':poom', $n4);

$stmt->execute();
$result = $stmt->fetchAll();

echo "<br>";
print_r($result);
