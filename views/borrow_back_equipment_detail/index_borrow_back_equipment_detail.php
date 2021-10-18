<head>
    <meta charset="UTF-8">
</head>

<p>new borrow_back_equipment_detail<a href=?controller=borrow_back_equipment_detail&action=newborrow_back_equipment_detail> click </a> <br> </p>


<table border = 1>
<tr>
    <td>borrow_back_equipment_detail_id</td>
    <td>borrow_back_id</td>
    <td>equipment_detail_id</td>
    <td>equipment_id</td>
    <td>equipment_name</td>
    
</tr>

<?php

    foreach($borrow_back_equipment_detailList as $borrow_back_equipment_detailList){
        echo "<tr>
                <td>$borrow_back_equipment_detailList->borrow_back_equipment_detail_id</td>
                <td>$borrow_back_equipment_detailList->borrow_back_id</td>
                <td>$borrow_back_equipment_detailList->equipment_detail_id</td>
                <td>$borrow_back_equipment_detailList->equipment_id</td>
                <td>$borrow_back_equipment_detailList->equipment_name</td>
                </tr>";
    }
echo"</table>"
?>