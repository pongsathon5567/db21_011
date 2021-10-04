<table border = 1>
<tr> 
<td>รหัสใบเสนอราคา</td>
<td>วันที่</td>
<td>ลูกค้า</td>
<td>พนักงาน</td>
<td>ที่อยู่ลูกค้า</td>
<td>เบอร์โทร</td>
<td>เงื่อนไขชำระ</td>
<td>update</td>
<td>delete</td>
</tr>

<p>"Welcome to quotation "</p>
ADD QUOTATION 
<a href=?controller=quotation&action=QuotationCreate>CLICK</a><br>
<br /> 
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="quotation">
        <button type="submit" name="action" value="search">
search</button>
<br /> 
</form>
<?php foreach($quotationList as $quotation){
    echo "<tr> 
    <td>$quotation->quotationID</td>
    <td>$quotation->date</td>
    <td>$quotation->cusName</td> 
    <td>$quotation->empName</td>
    <td>$quotation->cusAddr</td>
    <td>$quotation->cusPhone</td>
    <td>$quotation->condiPrice</td>
    
    <td><a href=?controller=quotation&action=UpdateDetail&quotationID=$quotation->quotationID>update</a></td>
    <td><a href=?controller=quotation&action=DeleteDetail&quotationID=$quotation->quotationID>delete</a></td>
    </tr>"; 
}
echo "</table>";
?>
<p> พงศธร คำเล็ก 6220502167</p>