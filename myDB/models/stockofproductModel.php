<?php
class stockofproduct
{
    public $Cid,$Pid;

    public function __construct($id,$Pid)
    {
        $this->Cid = $Cid;
        $this->Pid = $Pid;
    }

    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM proColorCom";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $colorID = $my_row[colorID];
            $proID = $my_row[proID];
            $stockofproductList[] = new stockofproduct($colorID,$proID);
        }
        require("connection_close.php");
        return $stockofproductList;
    }
}