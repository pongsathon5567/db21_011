<?php
$controllers = array('pages'=>['home', 'error'],'quotation'=>['index','QuotationCreate','QuotationAdd','search','UpdateDetail','update','DeleteDetail','delete']
'detailQuotation'=>['indexQuoDetail','newQuoDetail','addQuoDetail','searchfrom','updateQuoDetail','updatefrom','deleteConfirm','deletefrom']); 

function call($controller, $action){
	echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php"); 
	switch($controller)
	{
		case "pages":	$controller = new PagesController();
						break;

		case "quotation" :  require_once("models/quotationModel.php");
							require_once("models/employeeModel.php");
							require_once("models/customerModel.php");
							$controller = new QuotationController();
							break;
							
        case "detailquotation" :  require_once("models/detailQuotationModel.php");
								  require_once("models/quotationModel.php");
								  require_once("models/stockofproductModel.php");
							      $controller = new detailQuotationController();
								  break;                    
                                                
	}

	$controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{	if(in_array($action, $controllers [$controller]))
	{	call($controller, $action); }
	else
	{	call('pages', 'error'); }

}
else
{	call('pages', 'error');} 
?>