<html>
<head>
    <title>Update Customer Information </title>
</head>
<body>
    <h1>Update Customer Information </h1>
    <form action=" " method=" ">
        <input type="text" placeholder="Enter Customer ...ID" name="CustomerID"> <br><br>
        <input type="text" placeholder="Name" name="name"> <br><br>
        <input type="date" placeholder="Birthdate" name="birthdate"> <br><br>
        <input type="email" placeholder="Email" name="________"> <br><br>
        <input type="text" placeholder="Country Code" name="________"> <br><br>
        <input type="number" placeholder="Outstanding debt" name="________"> <br><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
echo "Start PHP";
require 'connect.php';

    //Update customer information
    $sql = "________ customer ________ name = :name, birthdate = :birthdate, email = :email, 
    countryCode = :countryCode, outstandingDebt = :outstandingDebt WHERE customerID = ________";
    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customerID', $_POST['CustomerID']);
    $stmt->bindParam(':name' , $_POST['name']);
    $stmt->bindParam(':birthdate' , $_POST['birthdate']);
    ________________________________
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
