<?php
require "connect.php";

if (isset($_GET["cname"])) 
{
    $strCName = $_GET["cname"];
    echo "<br>" . "strCName = " .$strCName; 
    $sql = "SELECT * FROM country where CountryName = '" . $strCName . "'";
    echo "<br>" . " sql = " .$sql . "<br>";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <br></br>
    <table width="300" border="3">
      <tr>
        <th width="325">รหัสประเทศ</th>
        <td width="240"><?php echo $result["CountryCode"]; ?></td>
      </tr>
    
      <tr>
        <th width="130">ชื่อประเทศ </th>
        <td><?php echo $result["CountryName"]; ?></td>
      </tr>
    
      </table>
<?php
}
?>