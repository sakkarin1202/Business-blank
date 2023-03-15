<html>
<head>
<title>August 14 Show Customer Information</title>
</head>
<body>

<?php
try {
    require "connect.php";

    $sql = "SELECT * FROM customer";
    $stmt = $conn->query($sql);

    $result = $stmt->fetchAll();
    // $result = $stmt->fetch(PDO::FETCH_NUM);
    // $result = $stmt->fetch(PDO::FETCH_BOTH);
    print_r($result);
} catch (PDOException $e) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
}
?>

<iframe width="600" height="450" src="https://datastudio.google.com/embed/reporting/5f4ab564-0958-40b7-b6ae-893dbcb18e11/page/xKfbC" frameborder="0" style="border:0" allowfullscreen></iframe>
</body>
</html>
