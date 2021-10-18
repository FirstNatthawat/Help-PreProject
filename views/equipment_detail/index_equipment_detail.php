<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">รหัสครุภัณฑ์</h4>
            <td ><a href='?controller=equipment_detail&action=newequipment_detail'><button class='btn btn-success mb-3'>สร้างรหัสครุภัณฑ์</button></a> </td>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>

    <td>equipment_detail_id</td>
    <td>equipment_name</td>
    <td>update</td>
    <td>delete</td>
                    </thead>
                    </tr>
                    <tbody>


<?php

    foreach($equipment_detailList as $equipment_detailList){
        echo "<tr>
                <td>$equipment_detailList->equipment_detail_id</td>
                <td>$equipment_detailList->equipment_name</td>
                <td><a href=?controller=equipment_detail&action=updateForm&equipment_detail_id=$equipment_detailList->equipment_detail_id>update</a></td>
                <td><a href=?controller=equipment_detail&action=deleteConfirm&equipment_detail_id=$equipment_detailList->equipment_detail_id>delete</a></td>
          </tr>";
    }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>