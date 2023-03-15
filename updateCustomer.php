<html>
<head>
    <title>Update Customer Information </title>
</head>
<body>
    <h1>Update Customer Information </h1>
    <form action="updateCustomer.php" method="POST">
        <input type="text" placeholder="Enter Customer ...ID" name="CustomerID"> <br><br>
        <input type="text" placeholder="Name" name="name"> <br><br>
        <input type="date" placeholder="Birthdate" name="birthdate"> <br><br>
        <input type="email" placeholder="Email" name="email"> <br><br>
        <input type="text" placeholder="Country Code" name="countryCode"> <br><br>
        <input type="number" placeholder="Outstanding debt" name="outstandingDebt"> <br><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
echo "Start PHP";
require 'connect.php';

    //Update customer information
    $sql = "UPDATE customer SET name = :name, birthdate = :birthdate, email = :email, 
    countryCode = :countryCode, outstandingDebt = :outstandingDebt WHERE customerID = :customerID";
    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customerID', $_POST['CustomerID']);
    $stmt->bindParam(':name' , $_POST['name']);
    $stmt->bindParam(':birthdate' , $_POST['birthdate']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':countryCode', $_POST['countryCode']);
    $stmt->bindParam(':outstandingDebt', $_POST['outstandingDebt']);

echo "Nee".$_POST['CustomerID'];

    if($stmt->execute()):
      
        $message = 'Successfully update customer information.';  
    else:     
        $message = 'Fail to update customer information.';
    endif;
    echo $message;
    $conn = null;
?>
