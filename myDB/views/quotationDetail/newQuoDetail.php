<from method="get"action="">
    <label>quotationDetailID<input type = "text" name = "quoDetailID"></label><br>
    <label>quotationID<input type = "text" name = "quoID"></label><br>
    <label>number<input type = "text" name = "detailNumber"></label><br>
    <label>storkID<select name ="storkID">
        <?php foreach($quotation_list as $quo){echo "<option value = $quo->id>
        $quo->name</option>";}?>
    </select></label><br>
    <label>unit<input type = "text" name = "detailUnit"></label><br>
    <label>print<input type = "text" name = "detailPrint"></label><br>
    <input type = "hidden" name ="controller" value = "quotationDetail"/>
    <button type ="submit"name ="action"value ="index">Back</button>
    <button type ="submit"name ="action"value ="addQuoDetail">Save</button>
        </from>