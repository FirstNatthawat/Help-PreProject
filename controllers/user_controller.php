<?php 
class userController{
    public function index()
    {
        $userList= user :: getAll();
        require_once('views/user/index_user.php') ;
    }
    public function newuser()
    {
        $userList = user :: getAll();
        $positionList = position :: getAll() ;
        require_once('views/user/newuser.php') ;

    }
    public function adduser()
    {
     
      $user_id = $_GET["user_id"];
  $user_name = $_GET["user_name"] ;
  $user_surname = $_GET["user_surname"];
  $user_id_student = $_GET["user_id_student"] ;
  $user_telephone = $_GET["user_telephone"];
  $position_id = $_GET["position_id"];
  $username = $_GET["username"];
  $password = $_GET["password"];


      user :: adduser($user_id,$user_name,$user_surname,$user_id_student,$user_telephone,$position_id,$username,$password);
      userController :: index();
    }
    public function updateForm()
    {
      $user_id =$_GET['user_id'] ;
      $user= user :: get($user_id);
      $userList = user :: getAll();
      $positionList = position :: getAll() ;
      require_once('views/user/updateFrom.php') ;
    }
    public function update()
    {
        $user_id =$_GET['user_id'] ;
        $user_name = $_GET["user_name"] ;
        $user_surname = $_GET["user_surname"];
        $user_id_student = $_GET["user_id_student"] ;
        $user_telephone = $_GET["user_telephone"];
        $position_id = $_GET["position_id"];
        $username = $_GET["username"];
        $password = $_GET["password"];
        user :: update($user_id,$user_name,$user_surname,$user_id_student,$user_telephone,$position_id,$username,$password) ;
        userController :: index();
    }
    
    public function deleteConfirm()
    {
      $user_id =$_GET['user_id'] ;
      $user= user :: get($user_id);
      require_once('views/user/deleteConfirm.php') ;
    }
     
    public function delete()
    {
      $user_id =$_GET['user_id'] ;
      user :: delete($user_id);
      userController :: index() ;
    }
}
?>