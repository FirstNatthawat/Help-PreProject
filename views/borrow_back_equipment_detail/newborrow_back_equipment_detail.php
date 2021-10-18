<form method="get" action="">
    <label>borrow_back_equipment_detail_id <input type = "int" name="borrow_back_equipment_detail_id"></label><br>
    
    <label>borrow_back_id <select name = "borrow_back_id" >
        <?php
        foreach ($borrow_back_equipment_detailList as $borrow_back_equipment_detailList)
            {
                echo " <option value= $borrow_back_equipment_detailList->borrow_back_id > $borrow_back_equipment_detailList->borrow_back_id  </option> ";
         }?>
    </select></label><br>
    
    <label>equipment_detail_id <select name = "equipment_detail_id" >
        <?php
        foreach ($equipment_detailList as $equipment_detailList)
            {
                echo " <option value= $equipment_detailList->equipment_detail_id > $equipment_detailList->equipment_detail_id $equipment_detailList->equipment_name</option> ";
         }?>

    </select></label><br>

<input type="hidden" name="controller" value="borrow_back_equipment_detail"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="missioncountry">Save</button>
</form>