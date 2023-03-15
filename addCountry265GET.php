<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add country</title>
</head>

<body>
	<h1>Add Country</h1>
	<form action="addcountry265GET.php" method="GET">

		<input type="text" placeholder="Enter Country code" name="CountryCode"> 
        <br><br>
        <input type="text" placeholder="Enter Country name" name="CountryName">
        <br><br>
       	<input type="submit">
	</form>
</body>
</html>

<?php
if (!empty($_GET['CountryCode']) && !empty($_GET['CountryName'])):
    require 'connect.php';
     $sql_insert = "insert into country values (:CountryCode, :CountryName)";

    $stmt = $conn->prepare($sql_insert);
    $stmt->bindParam(':CountryCode', $_GET['CountryCode']);
    $stmt->bindParam(':CountryName', $_GET['CountryName']);
      
    if ($stmt->execute()):
        $message = 'Suscessfully add new country';
        //header("Location: /business/selectCountry1.php");
    else:
        $message = 'Fail to add new country';
    endif;
    echo $message;
    $conn = null;
endif;
?>

