<?php
class borrow_back_status_student{
  
    public $borrow_back_id;
    public $user_id;
    
    public $borrow_back_purpose ;
    public $teacher_approve_id;
    public $borrow_daytime ;

    public $back_daytime;
    public $time_stamp;
    public $approve_by_teacher_status ;
    public $st1 ;
    public $borrow_status;

    public $st2 ;
    



  
    
public function __construct($borrow_back_id,$user_id
,$borrow_back_purpose,$teacher_approve_id,$borrow_daytime
,$back_daytime,$time_stamp,$approve_by_teacher_status,$st1,$borrow_status
,$st2 )
{
    $this->borrow_back_id =$borrow_back_id ;
    $this->user_id =$user_id ;
    
    $this->borrow_back_purpose =$borrow_back_purpose ;
    $this->teacher_approve_id =$teacher_approve_id ;
    $this->borrow_daytime =$borrow_daytime ;

    $this->back_daytime =$back_daytime ;
    $this->time_stamp =$time_stamp ;
    $this->approve_by_teacher_status =$approve_by_teacher_status ;
    $this->st1 =$st1 ;
    $this->borrow_status =$borrow_status ;

    $this->st2 =$st2 ;
    
    
}

public static function getAll()
{
  
    $borrow_back_status_studentList = [];
    require("connection_connect.php");
    $sql =" select
    borrow_back.borrow_back_id,
    borrow_back.user_id,
    
    borrow_back.borrow_back_purpose,
    borrow_back.teacher_approve_id,
    borrow_back.borrow_daytime,
    
    borrow_back.back_daytime,
    borrow_back.time_stamp,
    borrow_back.approve_by_teacher_status,
    st1.status_text AS st1,
    borrow_back.borrow_status,

    st2.status_text AS st2
    
   FROM
    borrow_back 
    INNER JOIN
    user ON borrow_back.user_id =user.user_id
   LEFT  JOIN
      status st1  ON borrow_back.approve_by_teacher_status = st1.status_id 
       LEFT   JOIN
      status st2  ON  borrow_back.borrow_status = st2.status_id ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $borrow_back_id = $my_row["borrow_back_id"];
        $user_id = $my_row["user_id"] ;
        
        $borrow_back_purpose = $my_row["borrow_back_purpose"] ;
        $teacher_approve_id = $my_row["teacher_approve_id"];
        $borrow_daytime = $my_row["borrow_daytime"];

        $back_daytime = $my_row["back_daytime"];
        $time_stamp = $my_row["time_stamp"] ;
        $approve_by_teacher_status = $my_row["approve_by_teacher_status"];
        $st1 = $my_row["st1"];
        $borrow_status = $my_row["borrow_status"] ;
        
        $st2 = $my_row["st2"];
        
        

        $borrow_back_status_studentList[] = new borrow_back_status_student($borrow_back_id,$user_id
        ,$borrow_back_purpose,$teacher_approve_id,$borrow_daytime
        ,$back_daytime,$time_stamp,$approve_by_teacher_status,$st1,$borrow_status
        ,$st2 ) ;
        
    }
    require("connection_close.php");
    return $borrow_back_status_studentList ;
}










public static function get($borrow_back_id)
{
  require("connection_connect.php") ;
  $sql ="select
  borrow_back.borrow_back_id,
  borrow_back.user_id,
  
  borrow_back.borrow_back_purpose,
  borrow_back.teacher_approve_id,
  borrow_back.borrow_daytime,
  
  borrow_back.back_daytime,
  borrow_back.time_stamp,
  borrow_back.approve_by_teacher_status,
  st1.status_text AS st1,
  borrow_back.borrow_status,

  st2.status_text AS st2
  
 FROM
  borrow_back 
  INNER JOIN
  user ON borrow_back.user_id =user.user_id
 LEFT  JOIN
    status st1  ON borrow_back.approve_by_teacher_status = st1.status_id 
     LEFT   JOIN
    status st2  ON  borrow_back.borrow_status = st2.status_id
  where borrow_back_id = '$borrow_back_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $borrow_back_id = $my_row["borrow_back_id"];
  $user_id = $my_row["user_id"] ;
  
  $borrow_back_purpose = $my_row["borrow_back_purpose"] ;
  $teacher_approve_id = $my_row["teacher_approve_id"];
  $borrow_daytime = $my_row["borrow_daytime"];

  $back_daytime = $my_row["back_daytime"];
  $time_stamp = $my_row["time_stamp"] ;
  $approve_by_teacher_status = $my_row["approve_by_teacher_status"];
  $st1 = $my_row["st1"];
  $borrow_status = $my_row["borrow_status"] ;
  
  $st2 = $my_row["st2"];
  require("connection_close.php");
  return new borrow_back_status_student($borrow_back_id,$user_id
  ,$borrow_back_purpose,$teacher_approve_id,$borrow_daytime
  ,$back_daytime,$time_stamp,$approve_by_teacher_status,$st1,$borrow_status
  ,$st2 );
}


public static function addborrow_back_status_student($borrow_back_id,$st1,$st2)
{
  require("connection_connect.php") ;
  $sql ="INSERT into borrow_back ( borrow_back.borrow_back_id,
 st1.status_text,st2.status_text) 
  values ('$borrow_back_id','$st1','$st2')";
  $result= $conn->query($sql);
  require("connection_close.php");
  return "add success $result rows";
}









}
?>