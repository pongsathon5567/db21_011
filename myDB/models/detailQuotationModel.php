<?php
class detailQuotation{
    public $quotationDetail_ID, $quotationID, $DetailNumber, $DetailUnit, $DetailPrint;
    public $colorID, $proID, $stockID;
    
    public function __construct($quotationDetail_ID,$quotationID,$DetailNumber,$DetailUnit,$DetailPrint,$colorID,$proID,$stockID)
    {
        $this->quotationDetail_ID = $quotationDetail_ID;
        $this->quotationID = $quotationID;
        $this->DetailNumber = $DetailNumber;
        $this->DetailUnit = $DetailUnit;
        $this->DetailPrint = $DetailPrint;
        $this->colorID = $colorID;
        $this->proID = $proID;
        $this->stockID = $stockID;
    }

    public static function getAll()
    {
        $quotationDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM quotationDetail NATURAL JOIN color NATURAL JOIN product ORDER BY quotationDetail_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Q_did = $my_row[quotationDetail_ID]
            $Q_id = $my_row[quotationID];
            $DetailNumber = $my_row[DetailNumber];
            $DetailUnit = $my_row[DetailUnit];
            $DetailPrint = $my_row[DetailPrint];
            $C_id = $my_row[colorID];
            $P_id = $my_row[proID];
            $C_name = $my_row[colorName];
            $P_name = $my_row[proName];

            $quotationDetailList[] = new detailQuotation($Q_did,$Q_id,$DetailNumber,$DetailUnit,$DetailPrint,$C_id,$P_id,$C_name,$P_name);
        }
        require("connection_close.php");
        return $quotationDetailList;
    }

    public static function Add($Q_did,$Q_id,$DetailNumber,$DetailUnit,$DetailPrint,$C_id,$P_id)
    { 
       require("connection_connect.php");
       $float = (float)$DetailNumber;
       $float = (float)$DetailUnit;
       $float = (float)$DetailPrint;
       $sql = "INSERT INTO `quotationDetail` (`quotationDetail_ID`, `quotationID`, `DetailNumber`, `DetailUnit`, `DetailPrint`, `colorID`, `proID`) VALUES ('$Q_did','$Q_id','$DetailNumber','$DetailUnit','$DetailPrint','$C_id','$P_id')";
       $result = $conn->query($sql);
       require("connection_close.php");
       return  ;
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM quotationDetail NATURAL JOIN color NATURAL JOIN product WHERE (quotationDetail_ID like '%$key%' or quotationID like '%$key%' or DetailNumber like '%$key%' or DetailUnit like '%$key%' or DetailPrint like '%$key%' or colorID like '%$key%' or proID like '%$key%')and quotationID=quotationID";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Q_did = $my_row[quotationDetail_ID]
            $Q_id = $my_row[quotationID];
            $DetailNumber = $my_row[DetailNumber];
            $DetailUnit = $my_row[DetailUnit];
            $DetailPrint = $my_row[DetailPrint];
            $C_id = $my_row[colorID];
            $P_id = $my_row[proID];
            $C_name = $my_row[colorName];
            $P_name = $my_row[proName];

            $quotationDetailList[] = new detailQuotation($Q_did,$Q_id,$DetailNumber,$DetailUnit,$DetailPrint,$C_id,$P_id,$C_name,$P_name);
        }
        require("connection_close.php");
        return $quotationDetailList;

    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM quotation NATURAL JOIN employee NATURAL JOIN customer WHERE quotationID='$id' and cusID = cusID";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $Q_did = $my_row[quotationDetail_ID]
        $Q_id = $my_row[quotationID];
        $DetailNumber = $my_row[DetailNumber];
        $DetailUnit = $my_row[DetailUnit];
        $DetailPrint = $my_row[DetailPrint];
        $C_id = $my_row[colorID];
        $P_id = $my_row[proID];
        $C_name = $my_row[colorName];
        $P_name = $my_row[proName];

        require("connection_close.php");
        return new detailQuotation($Q_did,$Q_id,$DetailNumber,$DetailUnit,$DetailPrint,$C_id,$P_id,$C_name,$P_name);

    }
    public static function Update($Q_did,$Q_id,$DetailNumber,$DetailUnit,$DetailPrint,$C_id,$P_id,$oldID)
     {
         echo "hi";
        require("connection_connect.php");
        $sql="UPDATE `quotationDetail` SET `quotationDetail_ID`='$Q_did',`quotationID`='$Q_id',
        `DetailNumber`='$DetailNumber',`DetailUnit`='$DetailUnit',`DetailPrint`='$DetailPrint' WHERE quotationDetailID = '$oldID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }

     public static function delete($id)
     {
         require("connection_connect.php");
         $sql = "DELETE FROM quotationDetail WHERE quotationDetailID = '$id'";
         $result = $conn->query($sql);
         require("connection_close.php");
         return ;
     }
}?>