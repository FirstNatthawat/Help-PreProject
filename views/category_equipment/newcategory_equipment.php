<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">สร้างหมวดหมู่อุปกรณ์</h4>
<form method="get" action="">
    <label>categoryequipment_id <input type = "text" name="categoryequipment_id"></label><br>
    <label>categoryequipment_name <input type = "text" name="categoryequipment_name"></label><br>
    
    
<input type="hidden" name="controller" value="category_equipment"/>
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="addcategory_equipment">Save</button>
</form>
        </div>
    </div>
</div>