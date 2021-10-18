<?php
class user{
  
    public $user_id;
    public $user_name;
    public $user_surname ;
    public $user_id_student;
    public $user_telephone ;
    public $position_id  ;
    public $username ;
    public $password ;

public function __construct($user_id,$user_name,$user_surname,$user_id_student,$user_telephone,$position_id,$username,$password)
{
    $this->user_id =$user_id ;
    $this->user_name =$user_name ;
    $this->user_surname =$user_surname ;
    $this->user_id_student =$user_id_student ;
    $this->user_telephone =$user_telephone ;
    $this->position_id =$position_id ;
    $this->username =$username ;
    $this->password =$password ;
    
}

public static function getAll()
{
  
    $missioncountryList = [];
    require("connection_connect.php");
    $sql ="select
    *
   FROM
     user
   
     INNER JOIN
       position ON user.position_id =position.position_id ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $user_id = $my_row["user_id"];
        $user_name = $my_row["user_name"] ;
        $user_surname = $my_row["user_surname"];
        $user_id_student = $my_row["user_id_student"] ;
        $user_telephone = $my_row["user_telephone"];
        $position_id = $my_row["position_id"];
        $username = $my_row["username"];
        $password = $my_row["password"];
        $userList[] = new user($user_id,$user_name,$user_surname,$user_id_student,$user_telephone,$position_id,$username,$password);
        
    }
    require("connection_close.php");
    return $userList ;
}

public static function get($user_id)
{
  require("connection_connect.php") ;
  $sql ="select
  *
 FROM
   user
 
   INNER JOIN
     position ON user.position_id =position.position_id 
  where user_id = '$user_id'  ";

  $result= $conn->query($sql);
  $my_row=$result->fetch_assoc() ;

  $user_id = $my_row["user_id"];
  $user_name = $my_row["user_name"] ;
  $user_surname = $my_row["user_surname"];
  $user_id_student = $my_row["user_id_student"] ;
  $user_telephone = $my_row["user_telephone"];
  $position_id = $my_row["position_id"];
  $username = $my_row["username"];
  $password = $my_row["password"];
  require("connection_close.php");
  return new user($user_id,$user_name,$user_surname,$user_id_student,$user_telephone,$position_id,$username,$password);
}

public static function adduser($user_id,$user_name,$user_surname,$user_id_student,$user_telephone,$position_id,$username,$password)
{
  require("connection_connect.php") ;
  $sql ="INSERT into user 
  (user.user_id,
    user.user_name,
    user.user_surname,
    user.user_id_student,
    user.user_telephone,
    user.position_id,
    user.username,
    user.password) 
  values ('$user_id','$user_name','$user_surname','$user_id_student','$user_telephone','$position_id','$username','$password')";
  $result= $conn->query($sql);
  require("connection_close.php");
  return "add success $result rows";
}

public static function update($user_id,$user_name,$user_surname,$user_id_student,$user_telephone,$position_id,$username,$password)
{
  require("connection_connect.php") ;
  $sql =" UPDATE user SET  user_name='$user_name'
  , user_surname='$user_surname' , 
  user_id_student='$user_id_student' , 
  user_telephone='$user_telephone' ,
  position_id='$position_id' ,
   username='$username', 
   password='$password'  
   WHERE user_id='$user_id' ";
 
  $result= $conn->query($sql);
  require("connection_close.php");
  return "update success $result rows";
}


public static function delete($user_id)
{
  require_once("connection_connect.php") ;
  $sql = "DELETE FROM user Where user_id = '$user_id' ";

  $result= $conn->query($sql);
  require("connection_close.php");
  return " delete success $result rows ";
}
}
?>