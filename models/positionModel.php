<?php
class position{
  
    public $position_id;
   
public function __construct($position_id)
{
    $this->position_id =$position_id ;
   
    
}

public static function getAll()
{
  
    $positionList = [];
    require("connection_connect.php");
    $sql ="select * FROM position ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $position_id = $my_row["position_id"];
        
        $positionList[] = new position($position_id);
        
    }
    require("connection_close.php");
    return $positionList ;
}


}
?>