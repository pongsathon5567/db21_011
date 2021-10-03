<?php echo "<br> คุณต้องการที่จะลบใช่หรือไม่? <br>
            <br> $quotation->quotationID $quotation->cusName <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="quotation" />

    <input type="hidden" name="quotationID" value="<?php echo $quotation->quotationID; ?>" />

    <button type="submit" name="action" value="index">Cancel</button>

    <button type="submit" name="action" value="delete">Confirm</button>
    

</form>