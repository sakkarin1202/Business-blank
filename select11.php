<?php

try {
    require "connect.php";

    $sql = "SELECT * FROM customer ";
    $stmt = $conn->query($sql);
    print_r($stmt->fetchAll());
   
} catch (PDOException $e) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
}
