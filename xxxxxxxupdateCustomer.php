<?php 


    require('connect.php');
    $sql ="update customer set name = :name , birthdate = :birthdate , email = :email , countryCode = :countryCode , outstandingDebt = :outstandingDebt
           where customerID = :customerID";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customerID',$_POST['customerID']);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':birthdate',$_POST['birthdate']);
    $stmt->bindParam(':email',$_POST['email']);
    $stmt->bindParam(':countryCode',$_POST['countryCode']);
    $stmt->bindParam(':outstandingDebt',$_POST['outstandingDebt']);
  
  
    if($stmt->execute()):
        $message = 'Suscessfully update customer';
    else:
        $message = 'Fail to update customer';
    endif;
    $conn = null;









?>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h1>Update Customer Information</h1>	 
	<form action="updateCustomer.php" method="POST">
		
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
	  <input type="number" placeholder="OutStanding debt" name="outstandingDebt"> 		
	  <input type="submit">
	</form>
</body>
</html>

