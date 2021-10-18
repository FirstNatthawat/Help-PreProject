
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">สร้างอุปกรณ์</h4>
<form method="get" action="">
    <label>equipment_id <input type = "text" name="equipment_id"></label><br>
    
    <label>categoryequipment_id <select name = "categoryequipment_id" >
        <?php
        foreach ($category_equipmentList as $category_equipmentList)
            {
                echo " <option value= $category_equipmentList->categoryequipment_id > $category_equipmentList->categoryequipment_name  </option> ";
         }?>
    </select></label><br>
    <label>equipment_name <input type = "text" name="equipment_name"></label><br>
    <label>quantity_equipent <input type = "text" name="quantity_equipent"></label><br>
    <label>picture_equipment  <input type="file" name="picture_equipment"><br> 
   
    
<input type="hidden" name="controller" value="equipment"/>
        <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
        <button type="submit" class="btn btn-primary"  name="action" value="equipment">Save</button>
</form>
        </div>
    </div>
</div>