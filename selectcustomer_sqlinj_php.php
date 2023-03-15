

<?php
if (isset($_GET['customerID'])):
    echo "<br>" . $_GET['customerID'];
    require 'connect.php';
    $sql = "SELECT * FROM customer where CustomerID = :customerID";
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

