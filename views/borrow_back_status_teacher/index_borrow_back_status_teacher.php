<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">การยืมที่ยังไม่อนุมัติ</h4>
                <td ><a href='?controller=borrow_back_status_teacher&action=newborrow_back_status_teacher'><button class='btn btn-success mb-3'>สร้างการยืมที่ยังไม่อนุมัติ</button></a> </td>
                <div class="data-tables">
                    <table class="table table-bordered">
                        <thead class="bg-light text-capitalize">
                        <tr>

    <td>borrow_back_id</td>
    <td>user_id</td>
    
    <td>borrow_back_purpose</td>
    
    <td>borrow_daytime</td>

    <td>back_daytime</td>
    <td>time_stamp</td>
   
    <td>borrow_status</td>

    <td>borrow_status status_text</td>
                        </thead>
                        </tr>
                        <tbody>
<?php

    foreach($borrow_back_status_teacherList as $borrow_back_status_teacherList){
        echo "<tr>
                <td>$borrow_back_status_teacherList->borrow_back_id</td>
                <td>$borrow_back_status_teacherList->user_id</td>
                
                <td>$borrow_back_status_teacherList->borrow_back_purpose</td>
                
                <td>$borrow_back_status_teacherList->borrow_daytime</td>

                <td>$borrow_back_status_teacherList->back_daytime</td>
                <td>$borrow_back_status_teacherList->time_stamp</td>
                
                <td>$borrow_back_status_teacherList->borrow_status</td>

                <td>$borrow_back_status_teacherList->st2</td>
                
              
           </tr>";
    }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>