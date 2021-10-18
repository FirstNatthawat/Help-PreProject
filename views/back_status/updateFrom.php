<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">อัปเดตการคืน</h4>
            <form method="get" action="">
<input type="hidden"name="borrow_back_id"value ="<?php echo $approve_by_teacher_status->borrow_back_id; ?>"/><br>
   
    
    <label>status_id
    <select name = "status_id">
        <?php 
            foreach($statusList as $statusList)
	        {
                echo "<option value= $statusList->status_id";
                if($statusList->status_id == $borrow_back_id->status_id)
                {echo " selected='selected'";}
		        echo "> $statusList->status_text</option>";
            }
        ?>
    </select>
    </label><br>
<input type="hidden" name="controller" value="back_status"/>
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="update">Update</button>
            </form>
        </div>
    </div>
</div>