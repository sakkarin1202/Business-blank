<html>
<head>
	<title>Test SQL injection</title>
</head>
<body>
	<h1>Test SQL injection</h1>
	<form action="select_inj_stu_php.php" method="GET">

	  <input type="text" placeholder="Enter Customer ID" name="customerID">
   
	  <br> <br>

	  <input type="submit">
	</form>
</body>
</html>

<?php
if (isset($_GET[' '])):
    echo "<br>" . $_GET[''];
    require 'connect.php';
    
    $sql = "SELECT * FROM customer where CustomerID = :               ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customerID', $_GET['customerID']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<br>******************* <br>";

    while ($row = $stmt->fetch()) {
        echo $row['CustomerID'] . ' ' . $row['Name'] . "<br/>";
    }

    $conn = null;
endif;
?>

