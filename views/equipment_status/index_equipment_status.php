
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">สถานะอุปกรณ์</h4>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
    <td>equipment_detail_id</td>
    <td>equipment_name</td>
    <td>st1</td>
    <td>st2</td>
    <td>st3</td>
                    </thead>
                    </tr>
                    <tbody>
<?php

    foreach($equipment_statusList as $equipment_statusList){
        echo "<tr>
                <td>$equipment_statusList->equipment_detail_id</td>
                <td>$equipment_statusList->equipment_name</td>
                <td>$equipment_statusList->st1</td>
                <td>$equipment_statusList->st2</td>
                <td>$equipment_statusList->st3</td>
             </tr>";
    }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>