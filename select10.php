
<?php

class cust
{
    private $cid;
    private $name;
    private $birthdate;
    private $email;
    private $countryCode;
    private $outstandingdebt;

    public function showCustomerInformation()
    {
        return "Customer ID: " . $this->cid . "Customer Name: " . $this->name . "<br>";
    }

    public function getCustomerName()
    {
        return $this->name;
    }
}

function getAllCustomerDetail()
{

    try {
        require "connect.php";

        $sql = "SELECT * FROM customer where customerID='Cus001'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $count = $stmt->rowCount();
        echo " Total Records Count : $count.<br>";

        if ($count > 0) {

            $stmt->setFetchMode(PDO::FETCH_CLASS, "cust");

            //$stmt->execute();
            return $obj = $stmt->fetch();
            echo '<pre>', print_r($obj), '</pre>';
            //echo $obj.getCustomerName; echo "slgjagl";
        }

    } catch (PDOException $e) {

        echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
    }
}

$allCustomerDetail = getAllCustomerDetail();

foreach ($allCustomerDetail as $cust) {
    // echo "<pre>" . $cust->getCustomerName() . "</pre>";
    echo $cust->getCustomerName();
}

?>
</body>
</html>
