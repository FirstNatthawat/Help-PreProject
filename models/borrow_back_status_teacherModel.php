<?php
class borrow_back_status_teacher{
  
  public $borrow_back_id;
  public $user_id;
  
  public $borrow_back_purpose ;
  
  public $borrow_daytime ;

  public $back_daytime;
  public $time_stamp;
  
  public $borrow_status;

  public $st2 ;
  




  
public function __construct($borrow_back_id,$user_id
,$borrow_back_purpose,$borrow_daytime
,$back_daytime,$time_stamp,$borrow_status,$st2 )
{
  $this->borrow_back_id =$borrow_back_id ;
  $this->user_id =$user_id ;
  
  $this->borrow_back_purpose =$borrow_back_purpose ;
  
  $this->borrow_daytime =$borrow_daytime ;

  $this->back_daytime =$back_daytime ;
  $this->time_stamp =$time_stamp ;
 
  $this->borrow_status =$borrow_status ;
  $this->st2 =$st2 ;
 
  
  
}

public static function getAll()
{

  $borrow_back_status_teacherList = [];
  require("connection_connect.php");
  $sql =" select
  borrow_back.borrow_back_id,
  borrow_back.user_id,
  
  borrow_back.borrow_back_purpose,
  
  borrow_back.borrow_daytime,
  
  borrow_back.back_daytime,
  borrow_back.time_stamp,
  
  borrow_back.borrow_status,

  st2.status_text AS st2
  
 FROM
  borrow_back 
  INNER JOIN
  user ON borrow_back.user_id =user.user_id
 
     LEFT   JOIN
    status st2  ON  borrow_back.borrow_status = st2.status_id ";
  
  $result= $conn->query($sql);
  while ($my_row=$result->fetch_assoc())
  {
      $borrow_back_id = $my_row["borrow_back_id"];
      $user_id = $my_row["user_id"] ;
      
      $borrow_back_purpose = $my_row["borrow_back_purpose"] ;
      
      $borrow_daytime = $my_row["borrow_daytime"];

      $back_daytime = $my_row["back_daytime"];
      $time_stamp = $my_row["time_stamp"] ;
      
      $borrow_status = $my_row["borrow_status"];
      $st2 = $my_row["st2"];
     
      
      

      $borrow_back_status_teacherList[] = new borrow_back_status_teacher($borrow_back_id,$user_id
      ,$borrow_back_purpose,$borrow_daytime
      ,$back_daytime,$time_stamp,$borrow_status,$st2 ) ;
      
  }
  require("connection_close.php");
  return $borrow_back_status_teacherList ;
}







public static function get($borrow_back_id)
{
  require("connection_connect.php") ;
  $sql ="select
  borrow_back.borrow_back_id,
  borrow_back.user_id,
  
  borrow_back.borrow_back_purpose,
  
  borrow_back.borrow_daytime,
  
  borrow_back.back_daytime,
  borrow_back.time_stamp,
  
  borrow_back.borrow_status,

  st2.status_text AS st2
  
 FROM
  borrow_back 
  INNER JOIN
  user ON borrow_back.user_id =user.user_id
 
     LEFT   JOIN
    status st2  ON  borrow_back.borrow_status = st2.status_id
  where borrow_back_id = '$borrow_back_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $borrow_back_id = $my_row["borrow_back_id"];
  $user_id = $my_row["user_id"] ;
  
  $borrow_back_purpose = $my_row["borrow_back_purpose"] ;
  
  $borrow_daytime = $my_row["borrow_daytime"];

  $back_daytime = $my_row["back_daytime"];
  $time_stamp = $my_row["time_stamp"] ;
  
  $borrow_status = $my_row["borrow_status"];
  $st2 = $my_row["st2"];

  require("connection_close.php");
  return new borrow_back_status_teacher($borrow_back_id,$user_id
      ,$borrow_back_purpose,$borrow_daytime
      ,$back_daytime,$time_stamp,$borrow_status,$st2 );
}


public static function addborrow_back_status_teacher($borrow_back_id,$st2)
{
  require("connection_connect.php") ;
  $sql ="INSERT into borrow_back ( borrow_back.borrow_back_id,
 st2.status_text) 
  values ('$borrow_back_id','$st2')";
  $result= $conn->query($sql);
  require("connection_close.php");
  return "add success $result rows";
}









}
?>