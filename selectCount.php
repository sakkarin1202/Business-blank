<html>
<head>
<title>Show Customer Information 22</title>
</head>
<body>
<?php
    try {
        require "connect.php";

        $sql = "SELECT Addr, sum(Curr_Bal) as ‘ยอดหนี้ทั้งหมด’
        FROM customer
        GROUP BY Addr
        HAVING sum(Curr_Bal) > 0";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // //แบบที่ 2
        while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
            echo "<br>" . "รหัสลูกค้า : " . $result[0];
        }

    } catch (PDOException $e) {

        echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
    }
    
    $conn = null;
?>

</body>
</html>
