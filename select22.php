<html>
<head>
<title>Show Customer Information</title>
</head>
<body>
<?php
    try {
        require "connect.php";
        $sql = "SELECT * FROM customer";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
            echo "<br>" . "ชื่อลูกค้า : " . $result[0] . " Email : "
                . $result[2]. " OutstandingDebt: " . $result[6]  ;
        }

    } catch (PDOException $e) {
        echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
    }    
    $conn = null;
?>

</body>
</html>