<html>
<head>
<title>001- Udsanee</title>
</head>
<body>
<?php
try {
    require "connect.php";

    //$sql = "SELECT * FROM customer";
    $sql = "SELECT * FROM customer, country where country.countrycode = customer.countrycode";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //แบบที่ 1
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<br>" . "รหัสลูกค้า : " . $result["CustomerID"] . " วันเกิด : " . $result["Birthdate"]
           . " from country ".$result["CountryName"] . " ยอดหนี้ : " . $result["OutstandingDebt"];
    }

    // // //แบบที่ 2
    // while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
    //     echo "<br>" . "ชื่อลูกค้า : " . $result[1] . " Email : "
    //         . $result[3];
    // }

} catch (PDOException $e) {

    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
}
?>
</body>
</html>
