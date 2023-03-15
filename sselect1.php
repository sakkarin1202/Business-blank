<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udsanee - select1.php </title>
</head>
<body>
    <?php

        try {
            require "connect.php";

            echo "<br/><br/>";
        
            $sql = "SELECT * FROM customer";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // เรียนเกี่ยวกับการ FETCH แบบต่าง ๆ 
            // 1) FETCH_ASSOC  เลือกใช้ชื่อคอลัมน์
            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                print_r($result);
            }
            
            // 2) FETCH_NUM เลือกใช้เลขลำดับคอลัมน์
            // $stmt->execute();
            // while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
            //     print_r($result);
            // }




        } catch (PDOException $e) {
            echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
        }
    ?>

</body>
</html>

// โครงสร้างการดักจับ error
// try {

//     เขียน code ที่จะไม่ error

// } catch (....) {

//      ดักจับ error แสดงข้อความอะไร
// }


    // 3) FETCH_BOTH เลือกใช้ทั้งชื่อคอลัมน์ และ เลขลำดับคอลัมน์
    // $stmt->execute();
    // while ($result = $stmt->fetch(PDO::FETCH_BOTH)) {
    //    print_r($result);
    // }


