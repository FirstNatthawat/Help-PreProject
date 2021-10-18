<?php
class teacher_approve{
  
    public $teacher_approve_id ;
    public $user_id ;
    public $user_name ;
    public $user_surname;

public function __construct($teacher_approve_id,$user_id,$user_name,$user_surname)
{
    $this->teacher_approve_id =$teacher_approve_id ;
    $this->user_id =$user_id ;
    $this->user_name =$user_name ;
    $this->user_surname =$user_surname ;
  
    
}

public static function getAll()
{
  
    $teacher_approveList = [];
    require("connection_connect.php");
    $sql ="select 
    teacher_approve.teacher_approve_id,
    teacher_approve.user_id,
    user.user_name,
    user.user_surname
   FROM
    teacher_approve
   
     INNER JOIN
       user ON teacher_approve.user_id = user.user_id ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $teacher_approve_id = $my_row["teacher_approve_id"];
        $user_id = $my_row["user_id"] ;
        $user_name = $my_row["user_name"];
        $user_surname = $my_row["user_surname"] ;
        $teacher_approveList[] = new teacher_approve($teacher_approve_id,$user_id,$user_name,$user_surname);
        
    }
    require("connection_close.php");
    return $teacher_approveList ;
}

public static function get($teacher_approve_id)
{
  require("connection_connect.php") ;
  $sql =" select 
  teacher_approve.teacher_approve_id,
  teacher_approve.user_id,
  user.user_name,
  user.user_surname
 FROM
  teacher_approve
 
   INNER JOIN
     user ON teacher_approve.user_id = user.user_id 
  where teacher_approve_id = '$teacher_approve_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $teacher_approve_id = $my_row["teacher_approve_id"];
  $user_id = $my_row["user_id"] ;
  $user_name = $my_row["user_name"];
  $user_surname = $my_row["user_surname"] ;
  require("connection_close.php");
  return new teacher_approve($teacher_approve_id,$user_id,$user_name,$user_surname);
}


  

public static function addteacher_approve($teacher_approve_id,$user_id,$user_name,$user_surname)
{
  require("connection_connect.php") ;
  $sql ="INSERT into teacher_approve 
  (teacher_approve.teacher_approve_id,
  teacher_approve.user_id,teacher_approve.user_name,
  teacher_approve.user_surname) 
  values ('$teacher_approve_id','$user_id','$user_name','$user_name','$user_surname')";
  $result= $conn->query($sql);
  require("connection_close.php");
  return "add success $result rows";
}

public static function update($teacher_approve_id,$user_id)
{
  require("connection_connect.php") ;
  $sql =" UPDATE teacher_approve SET  user_id='$user_id' 
   WHERE teacher_approve_id='$teacher_approve_id' ";
 
  $result= $conn->query($sql);
  require("connection_close.php");
  return "update success $result rows";
}


public static function delete($teacher_approve_id)
{
  require_once("connection_connect.php") ;
  $sql = "DELETE FROM teacher_approve Where teacher_approve_id = '$teacher_approve_id' ";

  $result= $conn->query($sql);
  require("connection_close.php");
  return " delete success $result rows ";
}

}
?>