<html>
<head>
	<title>Test SQL injection</title>
</head>
<body>
	<h1>Test SQL injection</h1>
	<form action="selectcustomer_sqlinjection.php" method="GET">

	  <input type="text" placeholder="Enter Customer ID" name="customerID">
	  <br> <br>

	  <input type="submit">
	</form>
</body>
</html>

<?php
//Test by entering --> Cus001' or '1=1
if (isset($_GET['customerID'])):  // ต้องเขียนเหมือนกับบรรทัดที่ 9  เป๊ะๆๆๆ
    echo "<br>" . $_GET['customerID'];
    require 'connect.php';

    $sql = "SELECT * FROM customer where CustomerID = '" . $_GET['customerID'] . "'";
                                                          Cus001' or '1=1
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

