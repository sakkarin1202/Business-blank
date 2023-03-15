<?php

if (isset($_GET['customerID'])):
    require 'connect.php';
    $n = $_GET['customerID'];
    $sql = "SELECT * FROM customer where CustomerID = '" . $n . "'";

    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $result = $stmt->fetchAll();
    
    echo "<br>";
    print_r($result);

 endif;
 $conn = null;

 // 1' or '1=1
?>
