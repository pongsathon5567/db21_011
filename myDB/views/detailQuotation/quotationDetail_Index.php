<table border = 1>
    <tr> <td>quotationDetail_ID</td>
    <td>quotationID</td>
    <td>DetailNumber</td>
    <td>stockID</td>
    <td>DetailUnit</td>
    <td>DetailPrint</td> </tr>
    
    <p>"Welcome to quotationDetail "</p>
ADD QUOTATION 
<a href=?controller=detailQuotation&action=newQuoDetail>CLICK</a><br>
<br />
    
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="detailQuotation">
        <button type="submit" name="action" value="search">
search</button>
<br /> 
</form>

    <?php foreach($detailQuotationlist as $detailQuotation){
        echo "<tr><td>$detailQuotation->quotationDetail_ID</td>
        <td>$detailQuotation->quotationID</td>
        <td>$detailQuotation->DetailNumber</td>
        <td>$detailQuotation->stockID</td>
        <td>$detailQuotation->DetailUnit</td>
        <td>$detailQuotation->DetailPrint</td>
        
        <td><a href=?controller=detailQuotation&action=updatefrom&quotationDetail_ID=$detailQuotation->quotationDetail_ID>update</a></td>
        <td><a href=?controller=detailQuotation&action=deleteComfirm&quotationDetail_ID=$detailQuotation->quotationDetail_ID>delete</a></td>
        </tr>"; 
    }
    echo "</table>";
    ?>
    <p>ธนาวุฒิ จิรสุวินัย 6220502124</p>