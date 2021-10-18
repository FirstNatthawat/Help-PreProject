<head>
        <meta charset="utf-8">
</head>

<table border = 1>
<tr>
    <td>borrow_back_id</td>
    <td>user_id</td>
    
    <td>borrow_back_purpose</td>
    <td>teacher_approve_id</td>
    <td>borrow_daytime</td>

    <td>back_daytime</td>
    <td>time_stamp</td>
    <td>approve_by_teacher_status</td>
    
    <td>borrow_status</td>

    
    <td>back_status</td>
    
    
</tr>

<?php

    foreach($borrow_backList as $borrow_backList){
        echo "<tr>
        <td>$borrow_backList->borrow_back_id</td>
        <td>$borrow_backList->user_id</td>
       
        <td>$borrow_backList->borrow_back_purpose</td>
        <td>$borrow_backList->teacher_approve_id</td>
        <td>$borrow_backList->borrow_daytime</td>
        <td>$borrow_backList->back_daytime</td>
        <td>$borrow_backList->time_stamp</td>
        <td>$borrow_backList->approve_by_teacher_status</td>
        
        <td>$borrow_backList->borrow_status</td>

        
        <td>$borrow_backList->back_status</td>
        
                </tr>";
    }
echo"</table>"
?>