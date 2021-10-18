<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">สร้างผู้ใช้งาน</h4>
            <form method="get" action="">
    <label>user_id <input type = "text" name="user_id"></label><br>
    <label>user_name <input type = "text" name="user_name"></label><br>
    <label>user_surname <input type = "text" name="user_surname"></label><br>
    <label>user_id_student <input type = "text" name="user_id_student"></label><br>
    <label>user_telephone <input type = "text" name="user_telephone"></label><br>
    
    <label>position_id <select name = "position_id" >
        <?php
        foreach ($positionList as $position)
            {
                echo " <option value= $position->position_id > $position->position_id  </option> ";
         }?>
    </select></label><br>
    
    <label>username <input type = "text" name="username"></label><br>
    <label>password <input type = "password" name="password"></label><br>


<input type="hidden" name="controller" value="user"/>
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="user">Save</button>
            </form>
        </div>
    </div>
</div>