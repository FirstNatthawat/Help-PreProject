<?php
class back_status{
  
  public $borrow_back_id;
  
  public $back_status  ;
  public $status_id ;
  public $status_text ;
  

public function __construct($borrow_back_id,$back_status,$status_id,$status_text)
{
  $this->borrow_back_id =$borrow_back_id ;
  
  $this->back_status =$back_status ;
  $this->status_id =$status_id ;
  $this->status_text =$status_text ;
  
}

public static function getAll()
{
  
    $back_statusList = [];
    require("connection_connect.php");
    $sql =" select
    borrow_back.borrow_back_id,
    
    borrow_back.back_status,
    status.status_id,
    status.status_text
   
   FROM
    borrow_back 
    INNER JOIN
    user ON borrow_back.user_id =user.user_id
   INNER  JOIN
      status   ON borrow_back.back_status = status.status_id 
      
     ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
      $borrow_back_id = $my_row["borrow_back_id"];
      
      $back_status = $my_row["back_status"];
      $status_id = $my_row["status_id"];
      $status_text = $my_row["status_text"];
     
        $back_statusList[] = new back_status($borrow_back_id,$back_status,$status_id,$status_text); 
    }
    require("connection_close.php");
    return $back_statusList ;
}







public static function get($borrow_back_id)
{
  require("connection_connect.php") ;
  $sql ="select
  borrow_back.borrow_back_id,
    
    borrow_back.back_status,
    status.status_id,
    status.status_text
   
   FROM
    borrow_back 
    INNER JOIN
    user ON borrow_back.user_id =user.user_id
   INNER  JOIN
      status   ON borrow_back.back_status = status.status_id 
    where borrow_back_id = '$borrow_back_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $borrow_back_id = $my_row["borrow_back_id"];
      
      $back_status = $my_row["back_status"];
      $status_id = $my_row["status_id"];
      $status_text = $my_row["status_text"];
     
  require("connection_close.php");
  return new back_status($borrow_back_id,$back_status,$status_id,$status_text);
}




public static function update($borrow_back_id,$status_id)
{
  require("connection_connect.php") ;
  $sql =" UPDATE borrow_back SET   status_id='$status_id' 
   WHERE borrow_back_id='$borrow_back_id' ";
 
  $result= $conn->query($sql);
  require("connection_close.php");
  return "update success $result rows";
}




}
?>