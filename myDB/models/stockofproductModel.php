<?php
class stockofproduct
{
    public $PCid;

    public function __construct($PCid)
    {
        $this->PCid = $PCid;
    }

    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM quotationDetail";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $stockID = $my_row[stockID];
           
            $stockofproductList[] = new stockofproduct($stockID);
        }
        require("connection_close.php");
        return $stockofproductList;
    }
}