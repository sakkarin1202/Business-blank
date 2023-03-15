<?php
require "connect.php";

//$n = "1" . " or '1=1";
$sql = "SELECT * FROM customer where CustomerID = :customerID";
$stmt = $conn->prepare($sql);
$cid = "Cus001";

$stmt->bindParam(':customerID', $cid);

$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $stmt->fetch()) {
    echo $row['CustomerID']. ' '. $row['Name']."<br/>";
}

$conn = null;

 

