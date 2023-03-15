<html>
<head>
<title>Show Customer Information</title>
</head>
<body>
<?php
try {
    require "connect.php";

    $sql = "SELECT * FROM customer order by CustomerID desc";
    $stmt = $conn->query($sql);

    while ($result = $stmt->fetch()) {
        echo "<br>" . "ชื่อลูกค้า : " . $result["Name"] . " อีเมล์ : " . $result["Email"];
    }

} catch (PDOException $e) {

    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
}
?>
</body>
</html>
