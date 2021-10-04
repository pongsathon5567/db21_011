<table border = 1>
    <tr> <td>quotationDetail_ID</td><td>quotationID</td><td>DetailNumber</td>
    <td>stockID</td><td>DetailUnit</td><td>DetailPrint</td> </tr>
    <?php foreach($quotationDetail_list as $quotationDetail){
        echo "<tr><td>$quotationDetail->quotationDetail_ID</td>
        <td>$quotationDetail->quotationID</td>
        <td>$quotationDetail->DetailNumber</td>
        <td>$quotationDetail->stockID</td>
        <td>$quotationDetail->DetailUnit</td>
        <td>$quotationDetail->DetailPrint</td>
        <td>update</td>
        <td>delete</td></tr>";
    }
    echo "</table>"
    ?>