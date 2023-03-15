
<?php
require 'connect.php';

$sql_select = "select * from country order by CountryCode";
$stmt_s = $conn->prepare($sql_select);
$stmt_s->execute();

if(isset($_POST['submit']))
{
   
  //if ((isset($_POST['customerID']) && isset($_POST['name'])) != null)
  if (!empty($_POST['customerID']) && !empty($_POST['name']))
  {
    //echo "<br>".$_POST['customerID'];
    //require 'connect.php';

    $sql = "insert into customer 
							values (:customerID, :Name, :birthdate, :email, :countrycode,
							:outstandingDebt)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customerID', $_POST['customerID']);
    $stmt->bindParam(':Name', $_POST['name']);
    $stmt->bindParam(':birthdate', $_POST['birthdate']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':countrycode', $_POST['countrycode']);
    $stmt->bindParam(':outstandingDebt', $_POST['outstandingDebt']);
  
    if ($stmt->execute()):
        $message = 'Successfully add new customer';
    else:
        $message = 'Fail to add new customer';
    endif;
    echo $message;

    $conn = null;

  }
}
?>

<html>
<head>
	<title>User Registration 651</title>
</head>
<body>
	<h1>Add Customer 651</h1>
	<form action="addcustomer_dropdown.php" method="POST">

	  <input type="text" placeholder="Enter Customer ID" name="customerID"> 
	  <br> <br>
	  <input type="text" placeholder="Name" name="name">
	  <br> <br>
	  <input type="date" placeholder="Birthdate" name="birthdate">
	  <br> <br>
	  <input type="email" placeholder="Email" name="email">
	  <br> <br>     
	  <input type="number" placeholder="OutStanding debt" name="outstandingDebt">
      <br> <br> 
      <label>Select a country code</label>
        <select name="countrycode">
            <?php

                while ($cc = $stmt_s->fetch(PDO::FETCH_ASSOC))
                {
            ?>
                <option value="<?php echo $cc["CountryCode"];   ?>">
                    <?php echo $cc["CountryName"]; ?>
                </option>
            <?php
                }               
            ?>
        </select>       
      <br> <br>

	  <input type="submit" value="Submit" name="submit" />
	</form>
</body>
</html>



