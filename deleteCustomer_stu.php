

<?php

require('connect.php');


$sql = "____________________________________________";
$stml = $conn->prepare($sql);
$stml->bindParam('______________________);

if(__________________){
    $message = "Successfully delete customer".$_GET['CustomerID'].".";
}else{
    $message = "Fail to delete customer information.";
}
echo $message;
$conn = null;


?>


