<?php
class approve_by_teacher_status{
  
  public $borrow_back_id;
  public $user_id;
  public $user_name ;
  public $user_surname;
  public $user_id_student ;

  public $user_telephone;
  public $position_id;
  public $borrow_back_purpose ;
  public $teacher_approve_id;
  public $borrow_daytime ;

  public $back_daytime;
  public $time_stamp;
  public $approve_by_teacher_status ;
  public $status_id ;
  public $status_text ;
  

public function __construct($borrow_back_id,$user_id,$user_name,$user_surname,$user_id_student 
,$user_telephone,$position_id,$borrow_back_purpose,$teacher_approve_id,$borrow_daytime
,$back_daytime,$time_stamp,$approve_by_teacher_status,$status_id,$status_text)
{
  $this->borrow_back_id =$borrow_back_id ;
  $this->user_id =$user_id ;
  $this->user_name =$user_name ;
  $this->user_surname =$user_surname ;
  $this->user_id_student =$user_id_student ;

  $this->user_telephone =$user_telephone ;
  $this->position_id =$position_id ;
  $this->borrow_back_purpose =$borrow_back_purpose ;
  $this->teacher_approve_id =$teacher_approve_id ;
  $this->borrow_daytime =$borrow_daytime ;

  $this->back_daytime =$back_daytime ;
  $this->time_stamp =$time_stamp ;
  $this->approve_by_teacher_status =$approve_by_teacher_status ;
  $this->status_id =$status_id ;
  $this->status_text =$status_text ;
  
}

public static function getAll()
{
  
    $approve_by_teacher_statusList = [];
    require("connection_connect.php");
    $sql =" select
    borrow_back.borrow_back_id,
    borrow_back.user_id,
    user.user_id,
    user.user_name,
    user.user_surname,
    user.user_id_student,
    
    user.user_telephone,
    user.position_id,
    borrow_back.borrow_back_purpose,
    borrow_back.teacher_approve_id,
    borrow_back.borrow_daytime,
    
    borrow_back.back_daytime,
    borrow_back.time_stamp,
    borrow_back.approve_by_teacher_status,
    status.status_id,
    status.status_text
   
   FROM
    borrow_back 
    INNER JOIN
    user ON borrow_back.user_id =user.user_id
   INNER  JOIN
      status   ON borrow_back.approve_by_teacher_status = status.status_id 
      
     ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
      $borrow_back_id = $my_row["borrow_back_id"];
      $user_id = $my_row["user_id"] ;
      $user_name = $my_row["user_name"];
      $user_surname = $my_row["user_surname"] ;
      $user_id_student = $my_row["user_id_student"];

      $user_telephone = $my_row["user_telephone"];
      $position_id = $my_row["position_id"] ;
      $borrow_back_purpose = $my_row["borrow_back_purpose"] ;
      $teacher_approve_id = $my_row["teacher_approve_id"];
      $borrow_daytime = $my_row["borrow_daytime"];

      $back_daytime = $my_row["back_daytime"];
      $time_stamp = $my_row["time_stamp"] ;
      $approve_by_teacher_status = $my_row["approve_by_teacher_status"];
      $status_id = $my_row["status_id"];
      $status_text = $my_row["status_text"];
     
        $approve_by_teacher_statusList[] = new approve_by_teacher_status($borrow_back_id,$user_id,$user_name,$user_surname,$user_id_student 
        ,$user_telephone,$position_id,$borrow_back_purpose,$teacher_approve_id,$borrow_daytime
        ,$back_daytime,$time_stamp,$approve_by_teacher_status,$status_id,$status_text) ; 
    }
    require("connection_close.php");
    return $approve_by_teacher_statusList ;
}







public static function get($borrow_back_id)
{
  require("connection_connect.php") ;
  $sql ="select
  borrow_back.borrow_back_id,
  borrow_back.user_id,
  user.user_id,
  user.user_name,
  user.user_surname,
  user.user_id_student,
  
  user.user_telephone,
  user.position_id,
  borrow_back.borrow_back_purpose,
  borrow_back.teacher_approve_id,
  borrow_back.borrow_daytime,
  
  borrow_back.back_daytime,
  borrow_back.time_stamp,
  borrow_back.approve_by_teacher_status,
  status.status_id,
  status.status_text
 
 FROM
  borrow_back 
  INNER JOIN
  user ON borrow_back.user_id =user.user_id
 INNER  JOIN
    status   ON borrow_back.approve_by_teacher_status = status.status_id
    where borrow_back_id = '$borrow_back_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $borrow_back_id = $my_row["borrow_back_id"];
      $user_id = $my_row["user_id"] ;
      $user_name = $my_row["user_name"];
      $user_surname = $my_row["user_surname"] ;
      $user_id_student = $my_row["user_id_student"];

      $user_telephone = $my_row["user_telephone"];
      $position_id = $my_row["position_id"] ;
      $borrow_back_purpose = $my_row["borrow_back_purpose"] ;
      $teacher_approve_id = $my_row["teacher_approve_id"];
      $borrow_daytime = $my_row["borrow_daytime"];

      $back_daytime = $my_row["back_daytime"];
      $time_stamp = $my_row["time_stamp"] ;
      $approve_by_teacher_status = $my_row["approve_by_teacher_status"];
      $status_id = $my_row["status_id"];
      $status_text = $my_row["status_text"];
  require("connection_close.php");
  return new approve_by_teacher_status($borrow_back_id,$user_id,$user_name,$user_surname,$user_id_student 
  ,$user_telephone,$position_id,$borrow_back_purpose,$teacher_approve_id,$borrow_daytime
  ,$back_daytime,$time_stamp,$approve_by_teacher_status,$status_id,$status_text);
}









public static function update($borrow_back_id,$user_id,$status_id)
{
  require("connection_connect.php") ;
  $sql =" UPDATE borrow_back SET  user_id='$user_id', status_id='$status_id' 
   WHERE borrow_back_id='$borrow_back_id' ";
 
  $result= $conn->query($sql);
  require("connection_close.php");
  return "update success $result rows";
}




}
?>