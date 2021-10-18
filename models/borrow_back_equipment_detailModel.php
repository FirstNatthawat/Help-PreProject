<?php
class borrow_back_equipment_detail{
  
    public $borrow_back_equipment_detail_id;
    public $borrow_back_id;
    public $equipment_detail_id ;
    public $equipment_id;
    public $equipment_name ;


public function __construct($borrow_back_equipment_detail_id,$borrow_back_id,$equipment_detail_id,$equipment_id,$equipment_name)
{
    $this->borrow_back_equipment_detail_id =$borrow_back_equipment_detail_id ;
    $this->borrow_back_id =$borrow_back_id ;
    $this->equipment_detail_id =$equipment_detail_id ;
    $this->equipment_id =$equipment_id ;
    $this->equipment_name =$equipment_name ;
    
}

public static function getAll()
{
  
    $borrow_back_equipment_detailList = [];
    require("connection_connect.php");
    $sql ="select   borrow_back_equipment_detail.borrow_back_equipment_detail_id,
    borrow_back_equipment_detail.borrow_back_id,
    borrow_back_equipment_detail.equipment_detail_id,
    equipment_detail.equipment_id,
    equipment.equipment_name
    FROM
    borrow_back_equipment_detail
    INNER JOIN
    equipment_detail ON borrow_back_equipment_detail.equipment_detail_id =equipment_detail.equipment_detail_id
    INNER JOIN
    equipment ON equipment_detail.equipment_id =equipment.equipment_id ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $borrow_back_equipment_detail_id = $my_row["borrow_back_equipment_detail_id"];
        $borrow_back_id = $my_row["borrow_back_id"] ;
        $equipment_detail_id = $my_row["equipment_detail_id"];
        $equipment_id = $my_row["equipment_id"] ;
        $equipment_name = $my_row["equipment_name"];
        $borrow_back_equipment_detailList[] 
        = new borrow_back_equipment_detail($borrow_back_equipment_detail_id,
        $borrow_back_id,$equipment_detail_id,
        $equipment_id,$equipment_name);
        
    }
    require("connection_close.php");
    return $borrow_back_equipment_detailList ;
}

public static function get($borrow_back_equipment_detail_id)
{
  require("connection_connect.php") ;
  $sql ="select   borrow_back_equipment_detail.borrow_back_equipment_detail_id,
  borrow_back_equipment_detail.borrow_back_id,
  borrow_back_equipment_detail.equipment_detail_id,
  equipment_detail.equipment_id,
  equipment.equipment_name
  FROM
  borrow_back_equipment_detail
  INNER JOIN
  equipment_detail ON borrow_back_equipment_detail.equipment_detail_id =equipment_detail.equipment_detail_id
  INNER JOIN
  equipment ON equipment_detail.equipment_id =equipment.equipment_id
  where borrow_back_equipment_detail_id = '$borrow_back_equipment_detail_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $borrow_back_equipment_detail_id = $my_row["borrow_back_equipment_detail_id"];
        $borrow_back_id = $my_row["borrow_back_id"] ;
        $equipment_detail_id = $my_row["equipment_detail_id"];
        $equipment_id = $my_row["equipment_id"] ;
        $equipment_name = $my_row["equipment_name"];
  require("connection_close.php");
  return new borrow_back_equipment_detail($borrow_back_equipment_detail_id,
  $borrow_back_id,$equipment_detail_id,
  $equipment_id,$equipment_name);
}



public static function addborrow_back_equipment_detail($borrow_back_equipment_detail_id,$borrow_back_id,$equipment_detail_id)
{
  require("connection_connect.php") ;
  $sql ="INSERT into borrow_back_equipment_detail 
  (borrow_back_equipment_detail.borrow_back_equipment_detail_id  , 
  borrow_back_equipment_detail.borrow_back_id,
  borrow_back_equipment_detail.equipment_detail_id, 
   ) 
  values ('$borrow_back_equipment_detail_id','$borrow_back_id','$equipment_detail_id')";
  $result= $conn->query($sql);
  require("connection_close.php");
  return "add success $result rows";
}


public static function update($missionCountryID,$missionID,$countryID)
{
  require("connection_connect.php") ;
  $sql =" UPDATE missioncountry SET  missionID='$missionID', countryID='$countryID' 
   WHERE missionCountryID='$missionCountryID' ";
 
  $result= $conn->query($sql);
  require("connection_close.php");
  return "update success $result rows";
}


public static function delete($missionCountryID)
{
  require_once("connection_connect.php") ;
  $sql = "DELETE FROM missioncountry Where missionCountryID = '$missionCountryID' ";

  $result= $conn->query($sql);
  require("connection_close.php");
  return " delete success $result rows ";
}

}
?>