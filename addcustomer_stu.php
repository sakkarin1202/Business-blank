<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h1>Add Customer</h1>
	<form action="     " method="    ">

	  <input type="text" placeholder="Enter Customer ID" name="customerID"> 
	  <br> <br>
	  <input type="text" placeholder="Name" name="Name">
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

<?php
echo "Before if";

if (isset($_POST['customerID']) && isset($_POST['Name'])):
    echo "<br>".$_POST['customerID'];
    require 'connect.php';

    $sql = "             customer 
							values (:customerID, :Name, :birthdate, :email, :countryCode,
							:outstandingDebt)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customerID', $_POST['customerID']);
    $stmt->bindParam(':      ', $_POST[' ']);
    $stmt->bindParam(':      ', $_POST['    ']);
    $stmt->bindParam(':      ', $_POST[' ']);
    $stmt->bindParam(':        ', $_POST[' ']);
    $stmt->bindParam(': ', $_POST['        ']);
  
    if ($stmt->execute()):
        $message = 'Suscessfully add new customer';
    else:
        $message = 'Fail to add new customer';
    endif;
    echo $message;

    $conn = null;
endif;
?>