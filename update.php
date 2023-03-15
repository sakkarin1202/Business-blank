
<html>
<head>
	<title>User update kong</title>
</head>
<body>
	<h1> UPDATE Customer</h1>	 
	<form action="update.php" method="POST">
		
	  <input type="text" placeholder="Enter Customer ID" name="CustomerID"> 
	  <br> <br>   
	  <input type="text" placeholder="Name" name="name"> 
	  <br> <br>
	  <input type="date" placeholder="Birthdate" name="Birthdate">  
	  <br> <br>
	  <input type="email" placeholder="Email" name="Email"> 
	  <br> <br>   
	  <input type="text" placeholder="Country code" name="CountryCode"> 
	  <br> <br>
	  <input type="number" placeholder="OutStanding debt" name="OutstandingDebt"> 		
	  <input type="submit">
	</form>
</body>
</html>
<?php
	require 'connect.php'; 
	$sql ="UPDATE customer SET CustomerID=:CustomerID,Name=:name,Birthdate=:Birthdate,Email=:Email,CountryCode=:CountryCode,OutstandingDebt=:OutstandingDebt where customerID=:CustomerID";
	$stmt = $conn->prepare($sql);	
    $stmt->bindParam(':CustomerID', $_POST['CustomerID']);
	$stmt->bindParam(':name', $_POST['name']);
	$stmt->bindParam(':Birthdate', $_POST['Birthdate']);
	$stmt->bindParam(':Email', $_POST['Email']);    
	$stmt->bindParam(':CountryCode', $_POST['CountryCode']);
	$stmt->bindParam(':OutstandingDebt', $_POST['OutstandingDebt']);
echo $sql;
echo $_POST['CustomerID'];
echo $_POST['Name'];
	if($stmt->execute()):
		$message = 'Successfully add new customer';
		echo "nee";
	else:
		$message = 'Fail to add new customer';
		echo "nee2";
    endif;
	$conn = null;
// endif;
?>

