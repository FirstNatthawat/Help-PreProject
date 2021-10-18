

<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">อัปเดตครุภัณฑ์</h4>


            <form method="get" action="">
<input type="hidden"name="equipment_detail_id"value ="<?php echo $equipment_detail->equipment_detail_id; ?>"/>
<label>equipment_name <select name = "equipment_id" >
<?php
            foreach ($equipmentList as $equipmentList)
            {?>
                <option value="<?php echo $equipmentList->equipment_id; ?> "><?php echo $equipmentList->equipment_name ?></option>


                <?php } ?>
    </select></label><br>



<input type="hidden" name="controller" value="equipment_detail"/>
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="update">Update</button>
            </form>
        </div>
    </div>
</div>