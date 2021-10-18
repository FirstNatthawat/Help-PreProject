<?php 
class category_equipment{
    public $categoryequipment_id ;
    public $categoryequipment_name ;


public function __construct($categoryequipment_id,$categoryequipment_name) 
    {
        $this->categoryequipment_id =$categoryequipment_id;
        $this->categoryequipment_name = $categoryequipment_name ;
    }



public static function getAll()
{
    $category_equipmentList = [] ;
    require("connection_connect.php");
    $sql ="select    
    category_equipment.categoryequipment_id,
    category_equipment.categoryequipment_name
     from
    category_equipment
  " ;
    $result = $conn->query($sql);
    while($my_row=$result->fetch_assoc())
    {
        $categoryequipment_id =$my_row["categoryequipment_id"];
        $categoryequipment_name =$my_row["categoryequipment_name"];   
        $category_equipmentList[] = new category_equipment ($categoryequipment_id,$categoryequipment_name) ;
    }
    require("connection_close.php");
    return $category_equipmentList ;   
}



public static function get($categoryequipment_id)
{
  require("connection_connect.php") ;
  $sql ="select    
  category_equipment.categoryequipment_id,
  category_equipment.categoryequipment_name
   from
  category_equipment
  where categoryequipment_id = '$categoryequipment_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $categoryequipment_id =$my_row["categoryequipment_id"];
        $categoryequipment_name =$my_row["categoryequipment_name"]; 
  require("connection_close.php");
  return new category_equipment($categoryequipment_id,$categoryequipment_name);
}





  


public static function addcategory_equipment($categoryequipment_id,$categoryequipment_name)
{
  require("connection_connect.php") ;
  $sql ="INSERT into category_equipment (category_equipment.categoryequipment_id  , category_equipment.categoryequipment_name) values 
  ('$categoryequipment_id','$categoryequipment_name')";
  $result= $conn->query($sql);
  require("connection_close.php");
  return "add success $result rows";
}





public static function update($categoryequipment_id,$categoryequipment_name)
{
  require("connection_connect.php") ;
  $sql =" UPDATE category_equipment SET  categoryequipment_name='$categoryequipment_name' 
   WHERE categoryequipment_id='$categoryequipment_id' ";
 
  $result= $conn->query($sql);
  require("connection_close.php");
  return "update success $result rows";
}





public static function delete($categoryequipment_id)
{
  require_once("connection_connect.php") ;
  $sql = "DELETE FROM category_equipment Where categoryequipment_id = '$categoryequipment_id' ";

  $result= $conn->query($sql);
  require("connection_close.php");
  return " delete success $result rows ";
}


}?>