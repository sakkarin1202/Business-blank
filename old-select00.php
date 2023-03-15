<html>
<head>
<title>Show Customer Information</title>
</head>
<body>
<?php

try {
    require "connect.php";

    $sql = "SELECT * FROM customer";
    $stmt = $conn->query($sql);
    print_r($stmt->fetchAll()); // สั่งแสดงผลอาเรย์ (array)

} catch (PDOException $e) {

    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();

} catch (Exception $e) {

    echo "เกิดข้อผิดพลาด : " . $e->getMessage();

}
?>
</body>
</html>