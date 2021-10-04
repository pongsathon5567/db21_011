<?php
class Quotation
{
    public $quotationID,$date,$cusName,$empName,$cusAddr; 
    public $cusID,$empID,$condiPrice,$deposit;

    public function __construct($quotationID,$date,$cusName,$cusAddr,$cusPhone,$empName,$cusID,$empID,$condiPrice,$deposit)
    {
        $this->quotationID = $quotationID;
        $this->date = $date;
        $this->cusName = $cusName;
        $this->empName = $empName;
        $this->cusAddr = $cusAddr;
        $this->cusPhone = $cusPhone;
        
        $this->cusID = $cusID;
        $this->empID = $empID;
        $this->condiPrice = $condiPrice;
        $this->deposit = $deposit;

    }

    public static function getAll()
    {
        $quotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM quotation NATURAL JOIN customer NATURAL JOIN employee ORDER BY quotationID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Q_id = $my_row[quotationID];
            $Q_date = $my_row[date];
            $Cus_name = $my_row[cusName];
            $Emp_name = $my_row[empName];
            $Cus_addr = $my_row[cusAddr];
            $Cus_phone = $my_row[cusPhone];
            
            $Cus_id = $my_row[cusID];
            $Emp_id = $my_row[empID];
            $Q_condiprice = $my_row[condiPrice];
            $Q_deposit = $my_row[deposit];

            $quotationList[] = new Quotation($Q_id,$Q_date,$Cus_name,$Emp_name,$Cus_addr,$Cus_phone,$Cus_id,$Emp_id,$Q_condiprice,$Q_deposit);
        }
        require("connection_close.php");
        return $quotationList;
    }

    public static function Add($Q_ID,$Q_DATE,$CUS_ID,$EMP_ID,$Q_CONDIPRICE,$Q_DEPOSIT,$P)
    { 
       require("connection_connect.php");
       $float = (float)$Q_DEPOSIT;
       $sql = "INSERT INTO `quotation` (`quotationID`, `date`, `empID`, `cusID`, `condiPrice`, `deposit`, `ProductOrder_M`) VALUES ('$Q_ID', '$Q_DATE', '$EMP_ID', '$CUS_ID', '$Q_CONDIPRICE', '$Q_DEPOSIT', '$P')";
       $result = $conn->query($sql);
       require("connection_close.php");
       return  ;
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM quotation NATURAL JOIN employee NATURAL JOIN customer WHERE (quotationID like '%$key%' or date like '%$key%' or empName like '%$key%' or cusName like '%$key%')and cusID=cusID";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Q_id = $my_row[quotationID];
            $Q_date = $my_row[date];
            $Cus_name = $my_row[cusName];
            $Emp_name = $my_row[empName];
            $Cus_addr = $my_row[cusAddr];
            $Cus_phone = $my_row[cusPhone];
            
            $Cus_id = $my_row[cusID];
            $Emp_id = $my_row[empID];
            $Q_condiprice = $my_row[condiPrice];
            $Q_deposit = $my_row[deposit];

            $quotationList[] = new Quotation($Q_id,$Q_date,$Cus_name,$Emp_name,$Cus_addr,$Cus_phone,$Cus_id,$Emp_id,$Q_condiprice,$Q_deposit);
        }
        require("connection_close.php");
        return $quotationList;

    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM quotation NATURAL JOIN employee NATURAL JOIN customer WHERE quotationID='$id' and cusID = cusID";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $Q_id = $my_row[quotationID];
        $Q_date = $my_row[date];
        $Cus_name = $my_row[cusName];
        $Emp_name = $my_row[empName];
        $Cus_addr = $my_row[cusAddr];
        $Cus_phone = $my_row[cusPhone];       

        $Cus_id = $my_row[cusID];
        $Emp_id = $my_row[empID];
        $Q_condiprice = $my_row[condiPrice];
        $Q_deposit = $my_row[deposit];
        require("connection_close.php");
        return new Quotation($Q_id,$Q_date,$Cus_name,$Emp_name,$Cus_addr,$Cus_phone,$Cus_id,$Emp_id,$Q_condiprice,$Q_deposit);

    }
    public static function Update($Q_ID,$Q_DATE,$CUS_ID,$EMP_ID,$Q_CONDIPRICE,$Q_DEPOSIT,$oldID)
     {
        require("connection_connect.php");
        $sql="UPDATE `quotation` SET `quotationID`='$Q_ID',`date`='$Q_DATE',
        `empID`='$Emp_name',`cusID`='$CUS_ID',`condiPrice`='$Q_CONDIPRICE',`deposit`='$Q_DEPOSIT' WHERE quotationID = '$oldID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }

     public static function delete($id)
     {
         require("connection_connect.php");
         $sql = "DELETE FROM quotation WHERE quotationID = '$id'";
         $result = $conn->query($sql);
         require("connection_close.php");
         return ;
     }
}