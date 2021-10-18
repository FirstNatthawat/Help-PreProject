<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">อุปกรณ์</h4>
                <td ><a href='?controller=equipment&action=newequipment'><button class='btn btn-success mb-3'>สร้างอุปกรณ์</button></a> </td>
                <div class="data-tables">
                    <table class="table table-bordered">
                        <thead class="bg-light text-capitalize">
                        <tr>
    <td>equipment_id</td>
    <td>categoryequipment_name</td>
    <td>equipment_name</td>
    <td>quantity_equipent</td>
    <td>picture_equipment</td>
    <td>update</td>
    <td>delete</td>
                        </thead>
                        </tr>
                        <tbody>

<?php

    foreach($equipmentList as $equipment){
        echo "<tr>
                <td>$equipment->equipment_id</td>
                <td>$equipment->categoryequipment_name</td>
                <td>$equipment->equipment_name</td>
                <td>$equipment->quantity_equipent</td>
                <td>$equipment->picture_equipment</td>
                <td><a href=?controller=equipment&action=updateForm&equipment_id=$equipment->equipment_id>update</a></td>
                <td><a href=?controller=equipment&action=deleteConfirm&equipment_id=$equipment->equipment_id>delete</a></td>
            </tr>";
    }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>