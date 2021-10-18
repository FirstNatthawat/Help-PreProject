
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">การยืม</h4>
            <form method="get" action="">
    <label>borrow_back_id <input type = "text" name="borrow_back_id"></label><br>
    <label>user_id <input type = "text" name="user_id"></label><br>
    <label>borrow_back_purpose <input type = "text" name="borrow_back_purpose"></label><br>
    <label>teacher_approve_id <input type = "text" name="teacher_approve_id"></label><br>
    <label>borrow_daytime <input type="datetime-local"  value="<?php echo date("c", strtotime($row['Time'])); ?>" class="date" name="borrow_daytime" ></label><br>
    <label>back_daytime <input type="datetime-local"  value="<?php echo date("c", strtotime($row['Time'])); ?>" class="date" name="back_daytime" ></label><br>
    <label>time_stamp <input type="datetime-local" name="time_stamp" value="<?php echo date("Y-m-d\TH:i:s",time()); ?>"/></label><br>
    
    <label>approve_by_teacher_status <select name = "st1" >
        <?php
        foreach ($statusList as $st1)
            {
                echo " <option value= $st1->approve_by_teacher_status > $st1->status_text</option> ";
         }?>

    </select></label><br>
    
    
    <label>borrow_status <select name = "st2" >
        <?php
        foreach ($statusList as $st2)
            {
                echo " <option value= $st2->borrow_status > $st2->status_text</option> ";
         }?>

    </select></label><br>
    
    
<input type="hidden" name="controller" value="borrow_back_status_student"/>
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="add">Save</button>
            </form>
        </div>
    </div>
</div>