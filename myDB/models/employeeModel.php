<?php
class Employee
{
    public $id,$name;

    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function getAll()
    {
        $employeeList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM employee";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $empID = $my_row[empID];
            $empName = $my_row[empName];
            $employeeList[] = new Employee($empID,$empName);
        }
        require("connection_close.php");
        return $employeeList;
    }
}