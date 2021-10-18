<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<head>
    <meta charset="UTF-8">
</head>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">สร้างผู้ใช้งาน</h4>
                <td ><a href='?controller=user&action=newuser'><button class='btn btn-success mb-3'>สร้างผู้ใช้งาน</button></a> </td>
                <div class="data-tables">
                    <table class="table table-bordered">
                        <thead class="bg-light text-capitalize">
                        <tr>
    <td>user_id</td>
    <td>user_name</td>
    <td>user_surname</td>
    <td>user_id_student</td>
    <td>user_telephone</td>
    <td>position_id</td>
    <td>username</td>
    <td>password</td>
    <td>update</td>
    <td>delete</td>

                        </thead>
                        </tr>
                        <tbody>

<?php

    foreach($userList as $userList){
        echo "<tr>
                <td>$userList->user_id</td>
                <td>$userList->user_name</td>
                <td>$userList->user_surname</td>
                <td>$userList->user_id_student</td>
                <td>$userList->user_telephone</td>
                <td>$userList->position_id</td>
                <td>$userList->username</td>
                <td>$userList->password</td>
                <td><a href=?controller=user&action=updateForm&user_id=$userList->user_id>update</a></td>
                <td><a href=?controller=user&action=deleteConfirm&user_id=$userList->user_id>delete</a></td>
           </tr>";
    }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>