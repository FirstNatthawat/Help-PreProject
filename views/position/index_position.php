<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">ตำเเหน่ง</h4>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
    <td>position_id</td>

    </thead>
</tr>
    <tbody>
<?php

    foreach($positionList as $positionList){
        echo "<tr>
                <td>$positionList->position_id</td>
 </tr>";
    }?>

    </tbody>
</table>
</div>
</div>
</div>
</div>