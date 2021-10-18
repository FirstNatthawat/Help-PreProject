
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">การยืม</h4>
            <td ><a href='?controller=borrow_back_status_student&action=newborrow_back_status_student'><button class='btn btn-success mb-3'>สร้างการยืม</button></a> </td>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
    <td>borrow_back_id</td>
    <td>user_id</td>
    
    <td>borrow_back_purpose</td>
    <td>teacher_approve_id</td>
    <td>borrow_daytime</td>

    <td>back_daytime</td>
    <td>time_stamp</td>
    <td>approve_by_teacher_status</td>
    <td>approve_status_text</td>
    <td>borrow_status</td>

    <td>borrow_status status_text</td>

                    </thead>
                    </tr>
                    <tbody>

<?php

    foreach($borrow_back_status_studentList as $borrow_back_status_studentList){
        echo "<tr>
                <td>$borrow_back_status_studentList->borrow_back_id</td>
                <td>$borrow_back_status_studentList->user_id</td>
                
                <td>$borrow_back_status_studentList->borrow_back_purpose</td>
                <td>$borrow_back_status_studentList->teacher_approve_id</td>
                <td>$borrow_back_status_studentList->borrow_daytime</td>

                <td>$borrow_back_status_studentList->back_daytime</td>
                <td>$borrow_back_status_studentList->time_stamp</td>
                <td>$borrow_back_status_studentList->approve_by_teacher_status</td>
                <td>$borrow_back_status_studentList->st1</td>
                <td>$borrow_back_status_studentList->borrow_status</td>

                <td>$borrow_back_status_studentList->st2</td>
                
            
                </tr>";
    }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>