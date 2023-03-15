<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    require "connect.php";

    // ลองให้โชว์ข้อมูล customer   
    // น้องมายด์ น้องกิ๊บ น้องจุ๊บแจง
    $sql = "SELECT * FROM customer";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();
    print_r($result);
    ?>

</body>
</html>