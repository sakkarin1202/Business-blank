<html>
<head>
<title>Display Customer Information and Select to See Detail</title>
</head>
<body>
    
    <?php
    require('connect.php');
    $sql = "select * from customer";
    $stml= $conn->prepare($sql);
    $stml->execute();    
    ?>

    <table width="800" border="1">
    <tr>
        <th width="40"><div align="center">Dodo</div></th>
        <th width="140"><div align="center">Name</div></th>
        <th width="120"><div align="center">BirthDate</div></th>
        <th width="100"><div align="center">Email</div></th>
        <th width="50"><div align="center">CountryCode</div></th>
        <th width="70"><div align="center">OutstandingDebt</div></th>
    </tr>
    <?php
    while($result = $stml->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
        <td><div align="center"><a href="deleteCustomer.php?CustomerID=<?php echo $result["CustomerID"];?>">
           <?php echo $result["CustomerID"];?></a></div></td>
        <td><div align="center"><?php echo $result["Name"];?></div></td>
        <td><div align="center"><?php echo $result["Birthdate"];?></div></td>
        <td><div align="center"><?php echo $result["Email"];?></div></td>
        <td><div align="center"><?php echo $result["CountryCode"];?></div></td>
        <td><div align="center"><?php echo $result["OutstandingDebt"];?></div></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <?php 
    $conn = null;
    ?>
</body>
</html>
