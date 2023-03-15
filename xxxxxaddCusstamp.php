<?php
if (!empty($_POST['customerID']) && !empty($_POST['name'])):
require ('connect.php'); 
$sql = "insert into customer(CustomerID,Name,Birthdate,Email,CountryCode,OutstandingDebt) values(:customerID, :name, :birthdate, :email , :countryCode, :outstandingDebt)"; 
			$stmt = $conn->prepare($sql); 
			$stmt->bindParam(':customerID', $_POST['customerID']); 
			$stmt->bindParam(':name', $_POST['name']); 
			$stmt->bindParam(':birthdate', $_POST['birthdate']); 
			$stmt->bindParam(':email', $_POST['email']); 
			$stmt->bindParam(':countryCode', $_POST['countryCode']); 
			$stmt->bindParam(':outstandingDebt', $_POST['outstandingDebt']);
                    echo $_POST['customerID'];
                    echo $_POST['name'];
                    echo $_POST['birthdate'];
                    echo $_POST['email'];
                    echo $_POST['countryCode'];
                    echo $_POST['outstandingDebt'];
            if( $stmt->execute()):
                
                echo $message = 'Successfully add new customer'; 
            else:
                echo $message = 'Fail to add new customer'; 
            endif;
    $conn = null; 
endif; 
?> 
<html> 
<head>
<title>User Registration</title> </head>

</head>

<body>

            <h1>Add Customer</h1> 
            <form action="addCusstamp.php" method="POST">
            <input type="text" placeholder="Enter Customer ID" name="customerID"> 
            <br> <br> 
            <input type="text" placeholder="Name" name="name"> 
            <br> <br> 
            <input type="date" placeholder="Birthdate" name="birthdate"> 
            <br> <br> 
            <input type="email" placeholder="Email" name="email"> 
            <br> <br> 
            <input type="text" placeholder="Country code" name="countryCode"> 
            <br> <br> 
            <input type="number" placeholder="Outstanding debt" name="outstandingDebt">
            <input type="submit"> </form>

</form>

</body>
</html>