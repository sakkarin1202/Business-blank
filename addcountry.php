
<?php

if (isset($_POST['CountryCode']) && isset($_POST['CountryName'])):
    echo "<br> After if";
    require 'connect.php';

    $sql = "insert into country 
							values (:CountryCode, :CountryName)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':CountryCode', $_POST['CountryCode']);
    $stmt->bindParam(':CountryName', $_POST['CountryName']);
    
  
    if ($stmt->execute()):
        $message = 'Suscessfully add new country';
    else:
        $message = 'Fail to add new country';
    endif;
    echo $message;

    $conn = null;
endif;
?>
