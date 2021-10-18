<?php
class equipment{
  
    public $equipment_id ;
    public $categoryequipment_id;
    public $categoryequipment_name;
    public $equipment_name;
    public $quantity_equipent ;
    public $picture_equipment ;

public function __construct($equipment_id,$categoryequipment_id,$categoryequipment_name,$equipment_name,$quantity_equipent,$picture_equipment)
{
    $this->equipment_id =$equipment_id ;
    $this->categoryequipment_id =$categoryequipment_id ;
    $this->categoryequipment_name =$categoryequipment_name ;
    $this->equipment_name =$equipment_name ;
    $this->quantity_equipent =$quantity_equipent ;
    $this->picture_equipment =$picture_equipment ;
}

public static function getAll()
{
  
    $equipmentList = [];
    require("connection_connect.php");
    $sql ="select
    *
    FROM
    equipment
    INNER JOIN
    category_equipment ON equipment.categoryequipment_id = category_equipment.categoryequipment_id ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $equipment_id = $my_row["equipment_id"];
        $categoryequipment_id = $my_row["categoryequipment_id"] ;
        $categoryequipment_name = $my_row["categoryequipment_name"];
        $equipment_name = $my_row["equipment_name"];
        $quantity_equipent = $my_row["quantity_equipent"];
        $picture_equipment = $my_row["picture_equipment"] ;

        $equipmentList[] = new equipment($equipment_id,$categoryequipment_id,$categoryequipment_name,$equipment_name,$quantity_equipent,$picture_equipment);
        
    }
    require("connection_close.php");
    return $equipmentList ;
}

public static function get($equipment_id)
{
  require("connection_connect.php") ;
  $sql ="select
  *
  FROM
  equipment
  INNER JOIN
  category_equipment ON equipment.categoryequipment_id = category_equipment.categoryequipment_id 
  where equipment_id = '$equipment_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $equipment_id = $my_row["equipment_id"];
        $categoryequipment_id = $my_row["categoryequipment_id"] ;
        $categoryequipment_name = $my_row["categoryequipment_name"];
        $equipment_name = $my_row["equipment_name"];
        $quantity_equipent = $my_row["quantity_equipent"];
        $picture_equipment = $my_row["picture_equipment"] ;

  require("connection_close.php");
  return new equipment($equipment_id,$categoryequipment_id,$categoryequipment_name,$equipment_name,$quantity_equipent,$picture_equipment);
}


  

public static function addequipment($equipment_id,$categoryequipment_id,$equipment_name,$quantity_equipent,$picture_equipment)
{
  require("connection_connect.php") ;
  $sql ="INSERT into equipment (
    equipment.equipment_id,
  
    equipment.categoryequipment_id,
  
  equipment.equipment_name,
  equipment.quantity_equipent,
  equipment.picture_equipment) 
  values ('$equipment_id','$categoryequipment_id''$equipment_name','$quantity_equipent','$picture_equipment')";
  $result= $conn->query($sql);
  require("connection_close.php");
  return "add success $result rows";
}


public static function update($equipment_id,$categoryequipment_id,$equipment_name,$quantity_equipent,$picture_equipment)
{
  require("connection_connect.php") ;
  $sql =" UPDATE equipment SET  equipment_id='$equipment_id', categoryequipment_id='$categoryequipment_id', equipment_name='$equipment_name' , quantity_equipent= '$quantity_equipent', picture_equipment= '$picture_equipment'
   WHERE equipment_id='$equipment_id' ";
 
  $result= $conn->query($sql);
  require("connection_close.php");
  return "update success $result rows";
}


public static function delete($equipment_id)
{
  require_once("connection_connect.php") ;
  $sql = "DELETE FROM equipment Where equipment_id = '$equipment_id' ";

  $result= $conn->query($sql);
  require("connection_close.php");
  return " delete success $result rows ";
}

}
?>