<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">อาจารย์ผู้อนุมัติ</h4>
                <td ><a href='?controller=teacher_approve&action=newteacher_approve'><button class='btn btn-success mb-3'>เพิ่มอาจารย์ผู้อนุมัติ</button></a> </td>
                <div class="data-tables">
                    <table class="table table-bordered">
                        <thead class="bg-light text-capitalize">
                        <tr>
    <td>teacher_approve_id</td>
    <td>user_id</td>
    <td>user_name</td>
    <td>user_surname</td>
    <td>update</td>
    <td>delete</td>
                        </thead>
                        </tr>
                        <tbody>

<?php

    foreach($teacher_approveList as $teacher_approveList){
        echo "<tr>
                <td>$teacher_approveList->teacher_approve_id</td>
                <td>$teacher_approveList->user_id</td>
                <td>$teacher_approveList->user_name</td>
                <td>$teacher_approveList->user_surname</td>
                <td><a href=?controller=teacher_approve&action=updateForm&teacher_approve_id=$teacher_approveList->teacher_approve_id>update</a></td>
                <td><a href=?controller=teacher_approve&action=deleteConfirm&teacher_approve_id=$teacher_approveList->teacher_approve_id>delete</a></td>
              </tr>";
    }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>