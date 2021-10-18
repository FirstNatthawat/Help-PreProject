<?php
class status{
  
    public $status_id;
    public $status_text;
   
public function __construct($status_id,$status_text)
{
    $this->status_id =$status_id ;
    $this->status_text =$status_text ;
   
    
}

public static function getAll()
{
  
    $statusList = [];
    require("connection_connect.php");
    $sql ="select * FROM status ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $status_id = $my_row["status_id"];
        $status_text = $my_row["status_text"];
        
        $statusList[] = new status($status_id,$status_text);
        
    }
    require("connection_close.php");
    return $statusList ;
}


}
?>