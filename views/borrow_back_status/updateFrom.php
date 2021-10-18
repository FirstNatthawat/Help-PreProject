

<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">อัปเดตสถานะ</h4>
            <form method="get" action="">
<input type="hidden"name="borrow_back_id"value ="<?php echo $borrow_back_status->borrow_back_id; ?>"/><br>
<input type="hidden"name="st1"value ="<?php echo $borrow_back_status->st1; ?>"/><br>
    
    <label>borrow_status
    <select name = "st2">
        <?php 
             foreach ($statusList as $st2)
             {
                 echo "<option value= $st2->st2";
         
                 echo "> $st2->status_text</option>";
     
     
              }
        ?>
    </select>
    </label><br>

    <label>back_status
    <select name = "st3">
        <?php 
             foreach ($statusList as $st3)
             {
                 echo "<option value= $st3->st3";
         
                 echo "> $st3->status_text</option>";
     
     
              }
        ?>
    </select>
    </label><br>
<input type="hidden" name="controller" value="borrow_back_status"/>
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary"  name="action" value="update">Update</button>
            </form>
        </div>
    </div>
</div>