
<?php

try {
    require "connect.php";
    require "cust.php";

    $sql = "SELECT * FROM customer";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, "cust");
    while ($result = $stmt->fetch()) {
        echo '<pre>', print_r($result), '</pre>';
    }
} catch (PDOException $e) {

    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();

}
?>

