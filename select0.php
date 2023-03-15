<?php
    require "connect.php";

    // ลองให้โชว์ข้อมูล customer   
    // น้องมายด์ น้องกิ๊บ น้องจุ๊บแจง
    $sql = "SELECT * FROM customer"; //อ บอกว่าเขียนประโยคหน้าตาเหมือน sql
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    echo '<br> before print_r';
    print_r($result);

    $result = $stmt->fetchAll();
    echo '<br> after print_r';
    print_r($result);
?>
