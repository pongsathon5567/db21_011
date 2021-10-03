<?php
class QuotationController
{
    public function index()
    {
        $quotationList = Quotation::getAll();
        require_once("./views/quotation/quotation_Index.php");
    }

    public function search()
    {
        $key=$_GET['key'];
        $quotationList = Quotation::search($key);
        require_once("./views/quotation/quotation_Index.php");
    }

    public function QuotationAdd()
    {

        $quotationID=$_GET['quotationID'];
        $date=$_GET['date'];
        $customer=$_GET['cusName'];
        $employee=$_GET['empName'];
        $condiPrice=$_GET['condiPrice'];
        $deposit=$_GET['deposit'];
        $p=-1;
        Quotation::Add($quotationID,$date,$customer,$employee,$condiPrice,$deposit,$p);

        QuotationController::index();
    }

    public function QuotationCreate()
    {
        $employeeList = Employee::getAll();
        $customerList = Customer::getAll();
        require_once("./views/quotation/QuotationCreate.php");
    }
    
    public function UpdateDetail()
    {
        $id=$_GET['quotationID'];
        $quotation = Quotation::get($id);
        $employeeList = Employee::getAll();
        $customerList = Customer::getAll();
        require_once("./views/quotation/UpdateDetail.php");
    }

    public function update()
    {
        $quotationID=$_GET['quotationID'];
        $date=$_GET['date'];
        $customer=$_GET['cusName'];
        $employee=$_GET['empName'];
        $condiPrice=$_GET['condiPrice'];
        $deposit=$_GET['deposit'];
        $oldID=$_GET['oldID'];
        Quotation::Update($quotationID,$date,$customer,$employee,$qCDP,$qDeposit,$oldID);

        QuotationController::index();
    }

    public function DeleteDetail()
    {
        $id=$_GET['quotationID'];
        $quotation = Quotation::get($id);
        require_once("./views/quotation/DeleteDetail.php");
    }
    public function delete()
    {
        $id=$_GET[''];
        Quotation::delete($id);
        QuotationController::index();
    }
    
}
?>