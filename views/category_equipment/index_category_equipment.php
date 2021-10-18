<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">หมวดหมู่อุปกรณ์</h4>
            <td ><a href='?controller=category_equipment&action=newcategory_equipment'><button class='btn btn-success mb-3'>สร้างหมวดหมู่อุปกรณ์</button></a> </td>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
    <td>categoryequipment_id</td>
    <td>categoryequipment_name</td>
    <td>update</td>
    <td>delete</td>
                    </thead>
                    </tr>
                    <tbody>

<?php

    foreach($category_equipmentList as $cateq){
        echo "<tr>
                <td>$cateq->categoryequipment_id</td>
                <td>$cateq->categoryequipment_name</td>
                <td><a href=?controller=category_equipment&action=updateForm&categoryequipment_id=$cateq->categoryequipment_id>update</a></td>
                <td><a href=?controller=category_equipment&action=deleteConfirm&categoryequipment_id=$cateq->categoryequipment_id>delete</a></td>
            </tr>";
    }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>