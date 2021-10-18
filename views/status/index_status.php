<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">สถานะ</h4>
                <div class="data-tables">
                    <table class="table table-bordered">
                        <thead class="bg-light text-capitalize">
                        <tr>
    <td>status_id</td>
    <td>status_text</td>

                        </thead>
                        </tr>
                        <tbody>

<?php

    foreach($statusList as $statusList){
        echo "<tr>
                <td>$statusList->status_id</td>
                <td>$statusList->status_text</td>
 </tr>";
    }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>