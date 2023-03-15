<?php

try {
    require "connect.php";

    echo "<br/><br/>";
  
    $sql = "SELECT * FROM customer";
    //$sql = "SELECT * FROM customer, country where country.countrycode = customer.countrycode";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // เรียนเกี่ยวกับการ FETCH แบบต่าง ๆ 
    // 1) FETCH_ASSOC  เลือกใช้ชื่อคอลัมน์
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($result);
    }

    echo "<br/><br/>";
    echo "This is FETCH_NUM result <br/>" ;
    $stmt->execute();
    // 2) FETCH_NUM  เลือกใช้ลำดับคอลัมน์
    while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
            print_r($result);
    }

    
} catch (PDOException $e) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
}

$conn = null;
?>