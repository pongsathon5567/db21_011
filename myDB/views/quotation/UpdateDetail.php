<form method="get" action="">

<label>รหัสใบเสนอราคา <input type="text" name="quotationID" 
        value="<?php echo $quotation->quotationID;?>"/></label><br>

<label>วันที่ <input type="date" name="date"
        value="<?php echo $quotation->date;?>"/></label><br>

<label>ชื่อลูกค้า <select name="cusName">
    <?php foreach($customerList as $cus) {
        echo "<option value = $cus->id";
        if($cus->id==$quotation->cusID){echo " selected='selected'";}
         echo ">$cus->name</option>";}
    ?>
    </select></label><br> 

<label>ชื่อพนักงาน <select name="empName">
    <?php foreach($employeeList as $emp) {
        echo "<option value = $emp->id";
        if($emp->id==$quotation->empName){echo " selected='selected'";}
         echo ">$emp->name</option>";}
    ?>
    </select></label><br> 

<label>เงื่อนไขชำระ <input type="text" name="condiPrice"
        value="<?php echo $quotation->condiPrice;?>"/></label><br>

<label>มัดจำ/เครดิต<input type="text" name="deposit"
        value="<?php echo $quotation->deposit;?>"/></label><br>
        <p> (ถ้าเงื่อนไขการชำระเป็น'เครดิต' ให้กรอกเลข '0')</p>
      

<input type="hidden"name="controller"value="quotation"/>

<input type="hidden" name="oldID" value="<?php echo $quotation->quotationID; ?>"/>

<button type= "submit"name="action"value="index">Back</button>

<button type= "submit"name="action"value="update">Update</button>

</form>