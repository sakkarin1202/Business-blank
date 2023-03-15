<html>
<head>
<title>Show Customer Information 22</title>
</head>
<body>
<?php
try {
    require "connect.php";

    $sql = "SELECT CustomerID, Email FROM customer";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //แบบที่ 1
    // while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo "<br>" . "รหัสลูกค้า : " . $result["CustomerID"] . " อีเมล์ : " . $result["Email"]. " --Bye";
    // }

    // //แบบที่ 2
    while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
        echo "<br>" . "รหัสลูกค้า : " . $result[0] . " อีเมล์ : " . $result[1]. " --Bye";
    }

} catch (PDOException $e) {

    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
}
?>
</body>
</html>
