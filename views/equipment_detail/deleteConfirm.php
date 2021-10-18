<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">ลบครุภัณฑ์</h4>
<?php echo"<br>Are you sure to delete this equipment_detail ID: $equipment_detail->equipment_detail_id ?<br>" ; ?>
            

<form method="get" action=" ">
    
<input type="hidden" name="controller" value="equipment_detail"/>
<input type="hidden" name="equipment_detail_id" value="<?php echo $equipment_detail->equipment_detail_id;?>"/>
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary"name="action" value="delete">delete</button>
</form>
        </div>
    </div>
</div>