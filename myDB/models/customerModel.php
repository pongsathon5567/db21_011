<?php
class Customer
{
    public $id,$name;

    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM customer";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $cusID = $my_row[cusID];
            $cusName = $my_row[cusName];
            $customerList[] = new Customer($cusID,$cusName);
        }
        require("connection_close.php");
        return $customerList;
    }
}