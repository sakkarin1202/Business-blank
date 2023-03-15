<html>
<head>
<title>Test111</title>
</head>
<body>
<?php
    require("connect.php");
	$sql = "SELECT * FROM customer";
	$stmt = $conn->prepare($sql);
	$stmt->execute();	
?>

<table width = "800" border = "1">
    <tr>
	<th width="90"><div align="center">Customer</div></th>
	<th width="140"><div align="center">Name</div></th>
	<th width="120"><div align="center">Brithdate</div></th>
	<th width="100"><div align="center">Email</div></th>
	<th width="50"><div align="center">CountryCode</div></th>
	<th width="70"><div align="center">OutstandingDebt</div></th>
	</tr>
		
	<tr>
	<?php
	while($result = $stmt->fetch(PDO ::FETCH_ASSOC)){
	?>
		<td><div align="center"><a href="showdetail.php?CustomerID=<?php echo $result["CustomerID"];?>">
		<?php echo $result["CustomerID"];?></a></td>
		<td><?php echo $result["Name"];?></td>
		<td><div align="center"><?php echo $result["Birthdate"];?></div></td>
		<td><?php echo $result["Email"];?></td>
		<td><div align="center"><?php echo $result["CountryCode"];?></div></td>
		<td align="center"><?php echo $result["OutstandingDebt"];?></td>
	</tr>
<?php 
	}
?>
</table>
<?php 
$conn=null;
?>
</body>
</html>