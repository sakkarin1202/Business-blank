<html>
<head>
<title>Show Customer Information23</title>
</head>
<body>
<?php

try {
    require "connect.php";

    $sql = "SELECT * FROM customer";
    $stmt = $conn->query($sql);

    //while($result = $stmt->fetch()) {
    while ($result = $stmt->fetchAll()) {
        echo print_r($result, true);
        //echo  print_r($result, true)."<br>" ;
    }

} catch (PDOException $e) {

    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();

}
?>
</body>
</html>
