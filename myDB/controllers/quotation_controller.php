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

        $Q_ID=$_GET['quotationID'];
        $Q_DATE=$_GET['date'];
        $customer=$_GET['cusName'];
        $employee=$_GET['empName'];
        $Q_CONDIPrice=$_GET['condiPrice'];
        $Q_DEPOSIT=$_GET['deposit'];
        $P=-1;
        Quotation::Add($Q_ID,$Q_DATE,$customer,$employee,$Q_CONDIPrice,$Q_DEPOSIT,$P);

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
        $Q_ID=$_GET['quotationID'];
        $Q_DATE=$_GET['date'];
        $customer=$_GET['cusName'];
        $employee=$_GET['empName'];
        $Q_CONDIPrice=$_GET['condiPrice'];
        $Q_DEPOSIT=$_GET['deposit'];
        $oldID=$_GET['oldID'];

        echo $Q_ID;
        echo $Q_DATE;
        echo $customer;
        echo $employee;
        echo $Q_CONDIPrice;
        echo $Q_DEPOSIT;
        echo $oldID;
        Quotation::Update($Q_ID,$Q_DATE,$customer,$employee,$Q_CONDIPrice,$Q_DEPOSIT,$oldID);

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
        $id=$_GET['quotationID'];
        Quotation::delete($id);
        QuotationController::index();
    }
    
}
?>