<form method="get" action="">

<label>quoDetailID <input type="text" name="quotationDetail_ID" 
        value="<?php echo $detailQuotation->quotationDetail_ID;?>"/></label><br>

<label>quotationID <input type="text" name="quotationID" 
        value="<?php echo $detailQuotation->quotationID;?>"/></label><br>

<label>numberDetail <input type="text" name="DetailNumber" 
        value="<?php echo $detailQuotation->DetailNumber;?>"/></label><br>

<label>storkID <select name="stockID">
    <?php foreach($stockofproductList as $stoclID) {
        echo "<option value = $stock->id";
        if($stock->id==$detailQuotation->stockID){echo " selected='selected'";}
         echo ">$stock->name</option>";}
    ?>
    </select></label><br> 

<label>unit <input type="text" name="DetailUnit"
        value="<?php echo $detailQuotation->DetailUnit;?>"/></label><br>

<label>numberPrint<input type="text" name="DetailPrint"
        value="<?php echo $detailQuotation->DetailPrint;?>"/></label><br>
        
      

<input type="hidden"name="controller"value="quotationDetail"/>

<input type="hidden" name="oldID" value="<?php echo $detailQuotation->quotationDetail_ID; ?>"/>

<button type= "submit"name="action"value="index">Back</button>

<button type= "submit"name="action"value="update">Update</button>

</form>