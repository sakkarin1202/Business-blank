<html> <head>
<title> 222Display Customer Information and Select to See Detail111</title>
</head>
<body>
<?php
require "connect.php";
//$sql = "SELECT * FROM customer";
//$sql = "SELECT * FROM customer where CountryCode='TH'";
 $sql = "SELECT * FROM customer, country where customer.CountryCode=country.CountryCode";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<table width="800" border="1">
  <tr>
    <th width="90"> <div align="center">รหัสผู้ใช้ </div></th>
    <th width="140"> <div align="center">Name of Customer </div></th>
    <th width="120"> <div align="center">Birthdate </div></th>
    <th width="100"> <div align="center">Email </div></th>
    <th width="50"> <div align="center">CountryCode </div></th>
    <th width="70"> <div align="center">ยอดหนี้</div></th>
  </tr>

<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>

  <tr>
    <td>
      <div align="center"><?php echo $result["CustomerID"]; ?> </div>       
    </td>

    <td>
        <div align="center"><?php echo $result["Name"]; ?>
    </td>
	<td><div align="center"><?php echo $result["Birthdate"]; ?></div></td>
    <td><?php echo $result["Email"]; ?></td>
    <td><div align="center"><?php echo $result["CountryCode"]; ?></div></td>
    <td align="right"><?php echo $result["OutstandingDebt"]; ?></td>
  </tr>

<?php
  }
?>

</table>

<?php
$conn = null;
?>

</body>  </html>



