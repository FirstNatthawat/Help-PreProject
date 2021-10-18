
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">ลบผู้ใช้งาน</h4>
            <?php echo"<br>Are you sure to delete this User : $user->user_name $user->user_surname  ?<br>" ; ?>

            

<form method="get" action=" ">
    
<input type="hidden" name="controller" value="user"/>
<input type="hidden" name="user_id" value="<?php echo $user->user_id;?>"/>
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="delete">Delete</button>
</form>
        </div>
    </div>
</div>