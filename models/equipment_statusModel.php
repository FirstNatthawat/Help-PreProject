<?php
class equipment_status{
  
    public $equipment_detail_id;
    public $equipment_id;
    public $equipment_name ;
    public $borrow_back_equipment_detail_id;
    public $borrow_back_id ;

    public $approve_by_teacher_status;
    public $st1;
    public $borrow_status ;
    public $st2;
    public $back_status ;

    public $st3 ;


public function __construct($equipment_detail_id,$equipment_id,$equipment_name,$borrow_back_equipment_detail_id,$borrow_back_id,
$approve_by_teacher_status,$st1,$borrow_status,$st2,$back_status,
$st3)
{
    $this->equipment_detail_id =$equipment_detail_id ;
    $this->equipment_id =$equipment_id ;
    $this->equipment_name =$equipment_name ;
    $this->borrow_back_equipment_detail_id =$borrow_back_equipment_detail_id ;
    $this->borrow_back_id =$borrow_back_id ;

    $this->approve_by_teacher_status =$approve_by_teacher_status ;
    $this->st1 =$st1 ;
    $this->borrow_status =$borrow_status ;
    $this->st2 =$st2 ;
    $this->back_status =$back_status ;

    $this->st3 =$st3 ;
    
}

public static function getAll()
{
  
    $equipment_statusList = [];
    require("connection_connect.php");
    $sql ="select
    equipment_detail.equipment_detail_id,
    equipment_detail.equipment_id,
    equipment.equipment_name,
    borrow_back_equipment_detail.borrow_back_equipment_detail_id,
    borrow_back_equipment_detail.borrow_back_id,
    borrow_back.approve_by_teacher_status,
      st1.status_text AS st1,
    borrow_back.borrow_status,
    st2.status_text AS st2,
   borrow_back.back_status,
    st3.status_text AS st3
    FROM
    equipment
    INNER JOIN
     equipment_detail ON equipment.equipment_id = equipment_detail.equipment_id 
     INNER JOIN
     borrow_back_equipment_detail ON  equipment_detail.equipment_detail_id  = borrow_back_equipment_detail.equipment_detail_id
     INNER JOIN
     borrow_back ON borrow_back_equipment_detail.borrow_back_id = borrow_back.borrow_back_id
     LEFT  JOIN
        status st1  ON borrow_back.approve_by_teacher_status = st1.status_id 
      LEFT  JOIN
     status st2  ON  borrow_back.borrow_status = st2.status_id 
          LEFT  JOIN
       status st3 ON   borrow_back.back_status = st3.status_id ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $equipment_detail_id = $my_row["equipment_detail_id"];
        $equipment_id = $my_row["equipment_id"] ;
        $equipment_name = $my_row["equipment_name"];
        $borrow_back_equipment_detail_id = $my_row["borrow_back_equipment_detail_id"] ;
        $borrow_back_id = $my_row["borrow_back_id"];

        $approve_by_teacher_status = $my_row["approve_by_teacher_status"];
        $st1 = $my_row["st1"] ;
        $borrow_status = $my_row["borrow_status"];
        $st2 = $my_row["st2"] ;
        $back_status = $my_row["back_status"];

        $st3 = $my_row["st3"];
        $equipment_statusList[] = new equipment_status($equipment_detail_id,$equipment_id,$equipment_name,$borrow_back_equipment_detail_id,$borrow_back_id,
        $approve_by_teacher_status,$st1,$borrow_status,$st2,$back_status,
        $st3);
        
    }
    require("connection_close.php");
    return $equipment_statusList ;
}


}
?>