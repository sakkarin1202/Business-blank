<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phailin - autentication.php</title>
</head>
<body>
    <?php

    try { // ดักจับข้อผิดพลาด
        require "connectAuthenticationDB.php";

        $sql = "SELECT * FROM authentication";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // เรียนเกี่ยวกับการ FETCH แบบต่างๆ
        // 1) FETCH_ASSOC เลือกใช้ชื่อคอลลัมน์
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            print_r($result);
        }

        echo "<br/><br/>";
        echo "this is FETCH_NUM result <br/r> ";
        $stmt->execute();
        // 2) FETCH_NUM เลือกใช้ลำดับคอลัมม์
        while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
                print_r($result);
        }


    

    } catch (PDOException $e) { // เกิดข้อผิดพลาด จะเด้งมาที่ catch
        echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();    
    }

    
    ?>
</body>
</html>