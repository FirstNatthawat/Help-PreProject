
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">เพิ่มอาจารย์ผู้อนุมัติ</h4>
            <form method="get" action="">
    <label>teacher_approve_id <input type = "text" name="teacher_approve_id"></label><br>
    
    <label>user_id <select name = "user_id" >
        <?php
        foreach ($userList as $userList)
            {
                echo " <option value= $userList->user_id > $userList->user_name  $userList->user_surname</option> ";

         }?>
    </select></label><br>
    
    
<input type="hidden" name="controller" value="teacher_approve"/>
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary"name="action" value="teacher_approve">Save</button>
            </form>
        </div>
    </div>
</div>