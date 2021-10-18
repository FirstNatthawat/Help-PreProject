<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">การอนุมัติการยืมนิสิต</h4>
                <div class="data-tables">
                    <table class="table table-bordered">
                        <thead class="bg-light text-capitalize">
                        <tr>
    <td>user_name</td>
    <td>user_surname</td>
    <td>user_id_student</td>

    <td>user_telephone</td>
    <td>position_id</td>
    <td>borrow_back_purpose</td>
    <td>teacher_approve_id</td>
    <td>borrow_daytime</td>

    <td>back_daytime</td>
    
    
    <td>approve_by_teacher_status status_text</td>
   
    <td>update</td>
                        </thead>
                        </tr>
                        <tbody>


<?php

    foreach($approve_by_teacher_statusList as $approve_by_teacher_statusList){
        echo "<tr>
        <td>$approve_by_teacher_statusList->user_name</td>
        <td>$approve_by_teacher_statusList->user_surname</td>
        <td>$approve_by_teacher_statusList->user_id_student</td>
        <td>$approve_by_teacher_statusList->user_telephone</td>
        <td>$approve_by_teacher_statusList->position_id</td>
        <td>$approve_by_teacher_statusList->borrow_back_purpose</td>
        <td>$approve_by_teacher_statusList->teacher_approve_id</td>
        <td>$approve_by_teacher_statusList->borrow_daytime</td>
        <td>$approve_by_teacher_statusList->back_daytime</td>
        <td>$approve_by_teacher_statusList->status_text</td>
                <td><a href=?controller=approve_by_teacher_status&action=updateForm&borrow_back_id=$approve_by_teacher_statusList->borrow_back_id>update</a></td>
 
            </tr>";
    }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>