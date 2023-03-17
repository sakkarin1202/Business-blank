<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbname = "business";

try
{
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname;charset=utf8", $userName, $userPassword);  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection succeeded";       

} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database";
}
?>