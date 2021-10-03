<form method="get" action="">

<label>รหัสใบเสนอราคา <input type="text" name="quotationID"/></label><br>

<label>วันที่ <input type="date" name="date"/></label><br>

<label>ชื่อลูกค้า <select name="cusName">
    <?php foreach($customerList as $CUS) {echo "<option value = $CUS->id>
    $CUS->name</option>";}
    ?>
    </select></label><br>

<label>เงื่อนไขชำระ(เครดิต/มัดจำ)<input type="text" name="condiPrice"/></label><br>

<label>มัดจำ/เครดิต<input type="text" name="deposit"/></label><br>
    <p> (ถ้าเงื่อนไขการชำระเป็น'เครดิต' ให้กรอกเลข '0')</p>

<label>ชื่อพนักงาน <select name="empName">
<?php foreach($employeeList as $EMP) {echo "<option value = $EMP->id>
    $EMP->name</option>";}
    ?>
    </select></label><br>

<input type="hidden"name="controller"value="quotation"/>

<button type= "submit"name="action"value="index">Back</button>

<button type= "submit"name="action"value="QuotationAdd">Confirm</button>

</form>