<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">สถานะการยืมคืน</h4>
                <div class="data-tables">
                    <table class="table table-bordered">
                        <thead class="bg-light text-capitalize">
                        <tr>
    <td>borrow_back_id</td>
    <td>user_name</td>
    <td>user_surname</td>
    <td>user_id_student</td>

    <td>user_telephone</td>
    <td>position_id</td>
    <td>borrow_back_purpose</td>
    <td>teacher_approve_id</td>
    <td>borrow_daytime</td>

    <td>back_daytime</td>
    <td>time_stamp</td>
    <td>approve_by_teacher_status</td>
    <td>approve_status_text</td>
    <td>borrow_status</td>

    <td>borrow_status status_text</td>
    <td>back_status</td>
    <td>back_status_text </td>
    <td>update</td>

                        </thead>
                        </tr>
                        <tbody>

<?php

    foreach($borrow_back_statusList as $borrow_back_statusList){
        echo "<tr>
                <td>$borrow_back_statusList->borrow_back_id</td>
                <td>$borrow_back_statusList->user_name</td>
                <td>$borrow_back_statusList->user_surname</td>
                <td>$borrow_back_statusList->user_id_student</td>
                <td>$borrow_back_statusList->user_telephone</td>
                <td>$borrow_back_statusList->position_id</td>
                <td>$borrow_back_statusList->borrow_back_purpose</td>
                <td>$borrow_back_statusList->teacher_approve_id</td>
                <td>$borrow_back_statusList->borrow_daytime</td>
                <td>$borrow_back_statusList->back_daytime</td>
                <td>$borrow_back_statusList->time_stamp</td>
                <td>$borrow_back_statusList->approve_by_teacher_status</td>
                <td>$borrow_back_statusList->st1</td>
                <td>$borrow_back_statusList->borrow_status</td>

                <td>$borrow_back_statusList->st2</td>
                <td>$borrow_back_statusList->back_status</td>
                <td>$borrow_back_statusList->st3</td>
                <td><a href=?controller=borrow_back_status&action=updateForm&borrow_back_id=$borrow_back_statusList->borrow_back_id>update</a></td>
              
             </tr>";
    }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>