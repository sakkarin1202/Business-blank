<html>
<head>
<title>Show Customer Information</title>
</head>
<body>
<?php
try {
    require "connect.php";
    $sql = "SELECT * FROM customer";
    //$sql = "SELECT * FROM customer where customerID='Cus001'";
    $stmt = $conn->query($sql);
   // print_r($stmt->fetchAll()); // สั่งแสดงผลอาเรย์ (array)

   while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<br>" . "ชื่อลูกค้า : " . $result["Name"] . " Email : "
        . $result["Email"];
}

} catch (PDOException $e) {

    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
}

//echo json_encode($result);

?>
</body>
</html>
