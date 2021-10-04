<?php
class detailQuotationController
{
    public function indexQuoDetail()
    {
        echo "hi";
        $quotationDetailList = detailQuotation::getAll();
        require_once("./views/detailQuotation/quotationDetail_Index.php");
    }

    public function searchfrom()
    {
        $key=$_GET['key'];
        $quotationDetailList = detailQuotation::search($key);
        require_once("./views/detailQuotation/quotationDetail_Index.php");
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

        detailQuotationController::indexQuoDetail();
    }

    public function newQuoDetail()
    {
        $stockofproductList = stockofproduct::getAll();
        require_once("./views/detailQuotation/newQuoDetail.php");
    }
    
    public function updateQuoDetail()
    {
        $id=$_GET['quotationID'];
        $quotation = detailQuotation::get($id);
        $stockofproductList = stockofproduct::getAll();
        require_once("./views/detailQuotation/updatefrom.php");
    }

    public function updatefrom()
    {
        $Q_did=$_GET['quotationDetail_ID'];
        $Q_id=$_GET['quotationID'];
        $DetailNumber = $_GET['DetailNumber'];
        $DetailUnit = $_GET['DetailUnit'];
        $DetailPrint = $_GET['DetailPrint'];
        $stockID = $_GET['stockID'];
        $oldID=$_GET['oldID'];


        detailQuotation::updatefrom($Q_did,$Q_id,$DetailNumber,$DetailUnit,$DetailPrint,$stockID,$oldID);

        detailQuotationController::indexQuoDetail();
    }

    public function deleteConfirm()
    {
        $id=$_GET['quotationDetail_ID'];
        $detailQuotation = detailQuotation::get($id);
        require_once("./views/detailQuotation/deleteConfirm.php");
    }
    public function deletefrom()
    {
        $id=$_GET['quotationID'];
        detailQuotation::deletefrom($id);
        detailQuotationController::indexQuoDetail();
    }
    
}
?>