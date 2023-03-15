<?php
echo "Before if";
echo " <br> ค่า customerID = " . $_POST['customerID'];
echo " <br> ค่า customer name = " . $_POST['name'];
if (isset($_POST['customerID']) && isset($_POST['name'])):
    echo "<br> After if";
    require 'connect.php';

    $sql = "insert into customer (CustomerID,Name,Birthdate,Email,CountryCode,OutstandingDebt)
							values (:customerID, :name, :birthdate, :email, :countryCode,
							:outstandingDebt)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customerID', $_POST['customerID']);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':birthdate', $_POST['birthdate']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':countryCode', $_POST['countryCode']);
    $stmt->bindParam(':outstandingDebt', $_POST['outstandingDebt']);
    echo $sql;
    if ($stmt->execute()):
        $message = 'Suscessfully add new customer';
    else:
        $message = 'Fail to add new customer';
    endif;
    echo $message;

    $conn = null;
endif;
?>