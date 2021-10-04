<?php echo "<br> คุณอยากจะลบข้อมูลทิ้งใช่หรือไม่? <br>
            <br> $detailQuotation->quotationDetail_ID <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="quotationDetail" />

    <input type="hidden" name="quotationID" value="<?php echo $detailQuotation->quotationDetail_ID; ?>" />

    <button type="submit" name="action" value="index">Cancel</button>

    <button type="submit" name="action" value="delete">Confirm</button>
    
</form>