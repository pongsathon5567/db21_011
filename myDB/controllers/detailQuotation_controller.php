<?php
class detailQuotationController
{
    public function index()
    {
        $quotationDetailList = detailQuotation::getAll();
        require_once("./views/quotationDetail/quotationDetail_Index.php");
    }

    public function search()
    {
        $key=$_GET['key'];
        $quotationDetailList = detailQuotation::search($key);
        require_once("./views/quotation/quotationDetail_Index.php");
    }

    public function addQuoDetail()
    {

        $Q_did = $_GET['quotationDetail_ID'];
        $Q_id=$_GET['quotationID'];
        $DetailNumber = $_GET['DetailNumber'];
        $DetailUnit = $_GET['DetailUnit'];
        $DetailPrint = $_GET['DetailPrint'];
        $C_id = $_GET['colorID'];
        $P_id = $_GET['proID'];

        detailQuotation::Add($Q_did,$Q_id,$DetailNumber,$DetailUnit,$DetailPrint,$C_id,$P_id);

        detailQuotationController::index();
    }

    public function newQuoDetail()
    {
        $employeeList = Employee::getAll();
        $customerList = Customer::getAll();
        require_once("./views/quotation/newQuoDetail.php");
    }
    
    public function UpdateQuoDetail()
    {
        $id=$_GET['quotationID'];
        $quotation = detailQuotation::get($id);
        $employeeList = Employee::getAll();
        $customerList = Customer::getAll();
        require_once("./views/quotation/UpdateDetail.php");
    }

    public function updatefrom()
    {
        $Q_did=$_GET['quotationDetail_ID'];
        $Q_id=$_GET['quotationID'];
        $DetailNumber = $_GET['DetailNumber'];
        $DetailUnit = $_GET['DetailUnit'];
        $DetailPrint = $_GET['DetailPrint'];
        $C_id = $_GET['colorID'];
        $P_id = $_GET['proID'];
        $oldID=$_GET['oldID'];


        detailQuotation::updatefrom($Q_did,$Q_id,$DetailNumber,$DetailUnit,$DetailPrint,$C_id,$P_id,$oldID);

        detailQuotationController::index();
    }

    public function DeleteConfirm()
    {
        $id=$_GET['quotationDetail_ID'];
        $detailQuotation = detailQuotation::get($id);
        require_once("./views/quotation/deleteConfirm.php");
    }
    public function delete()
    {
        $id=$_GET['quotationID'];
        detailQuotation::delete($id);
        detailQuotationController::index();
    }
    
}
?>