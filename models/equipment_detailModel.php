<?php
class equipment_detail{
  
    public $equipment_detail_id;
    public $equipment_id;
    public $equipment_name ;

public function __construct($equipment_detail_id,$equipment_id,$equipment_name)
{
    $this->equipment_detail_id =$equipment_detail_id ;
    $this->equipment_id =$equipment_id ;
    $this->equipment_name =$equipment_name ;
   
    
}

public static function getAll()
{
  
    $equipment_detailList = [];
    require("connection_connect.php");
    $sql ="select
    equipment_detail.equipment_detail_id,
    equipment_detail.equipment_id,
   
     equipment.equipment_name
   
   FROM
     equipment
   
     INNER JOIN
       equipment_detail ON equipment.equipment_id =equipment_detail.equipment_id ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $equipment_detail_id = $my_row["equipment_detail_id"];
        $equipment_id = $my_row["equipment_id"] ;
        $equipment_name = $my_row["equipment_name"];
       
        $equipment_detailList[] = new equipment_detail ($equipment_detail_id,$equipment_id,$equipment_name);
        
    }
    require("connection_close.php");
    return $equipment_detailList ;
}

public static function get($equipment_detail_id)
{
  require("connection_connect.php") ;
  $sql ="select
  equipment_detail.equipment_detail_id,
  equipment_detail.equipment_id,
 
   equipment.equipment_name
 
 FROM
   equipment
 
   INNER JOIN
     equipment_detail ON equipment.equipment_id =equipment_detail.equipment_id 
  where equipment_detail_id = '$equipment_detail_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $equipment_detail_id = $my_row["equipment_detail_id"];
        $equipment_id = $my_row["equipment_id"] ;
        $equipment_name = $my_row["equipment_name"];
  require("connection_close.php");
  return new equipment_detail($equipment_detail_id,$equipment_id,$equipment_name);
}


  

public static function addequipment_detail($equipment_detail_id,$equipment_id)
{
  require("connection_connect.php") ;
  $sql ="INSERT into equipment_detail 
  (equipment_detail.equipment_detail_id,
  equipment_detail.equipment_id) values 
  ('$equipment_detail_id','$equipment_id')";
  $result= $conn->query($sql);
  require("connection_close.php");
  return "add success $result rows";
}


public static function update($equipment_detail_id,$equipment_id)
{
  require("connection_connect.php") ;
  $sql =" UPDATE equipment_detail SET  equipment_id='$equipment_id'
   WHERE equipment_detail_id='$equipment_detail_id' ";
 
  $result= $conn->query($sql);
  require("connection_close.php");
  return "update success $result rows";
}


public static function delete($equipment_detail_id)
{
  require_once("connection_connect.php") ;
  $sql = "DELETE FROM equipment_detail Where equipment_detail_id = '$equipment_detail_id' ";

  $result= $conn->query($sql);
  require("connection_close.php");
  return " delete success $result rows ";
}

}
?>