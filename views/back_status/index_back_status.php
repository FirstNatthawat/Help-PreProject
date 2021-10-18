
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">คืนอุปกรณ์</h4>
            <table class="table table-bordered">
                <thead class="bg-light text-capitalize">
                <tr>
    <td>borrow_back_id</td>
    <td>back_status</td>
    <td>status_id</td>

    <td>status_text</td>
    <td>update</td>

    </thead>
</tr>
            <tbody>

<?php

    foreach($back_statusList as $back_statusList){
        echo "<tr>
        <td>$back_statusList->borrow_back_id</td>
        <td>$back_statusList->back_status</td>
        <td>$back_statusList->status_id</td>
        <td>$back_statusList->status_text</td>
        <td><a href=?controller=back_status&action=updateForm&borrow_back_id=$back_statusList->borrow_back_id>update</a></td>
 
         </tr>";
    }?>

            </tbody>
            </table>
        </div>
    </div>
</div>
