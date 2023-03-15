<html>
<head>
	<title>Test SQL injection</title>
</head>
<body>
	<h1>Test SQL injection</h1>
	<form action="selectcustomer_sqlinjection_post.php" method="POST">

	  <input type="text" placeholder="Enter Customer ID" name="customerID">
	  <br> <br>

	  <input type="submit">
	</form>
</body>
</html>

<?php
if (isset($_POST['customerID'])):
    echo "<br>" . $_POST['customerID'];
    require 'connect.php';

    $sql = "SELECT * FROM customer where CustomerID = '" . $_POST['customerID'] . "'";

    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo "<br>******************* <br>";

    while ($row = $stmt->fetch()) {
        echo $row['CustomerID'] . ' ' . $row['Name'] . "<br/>";
    }

    $conn = null;
endif;
?>

