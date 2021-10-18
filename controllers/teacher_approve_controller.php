<?php 
class teacher_approveController{
    public function index()
    {
        $teacher_approveList= teacher_approve :: getAll();
        require_once('views/teacher_approve/index_teacher_approve.php') ;
    }
    public function newteacher_approve()
    {
        $teacher_approveList = teacher_approve :: getAll();
        $userList = user :: getAll() ;
        require_once('views/teacher_approve/newteacher_approve.php') ;
        
    }
    public function addteacher_approve()
    {
      $teacher_approve_id = $_GET['teacher_approve_id'] ;
      $user_id = $_GET['user_id'] ;
      $user_name = $_GET['user_name'] ;
      $user_surname = $_GET['user_surname'] ;


      teacher_approve :: addteacher_approve($teacher_approve_id,$user_id,$user_name,$user_surname) ;
      teacher_approveController :: index();
    }

    public function updateForm()
    {
      $teacher_approve_id =$_GET['teacher_approve_id'] ;
      $teacher_approve= teacher_approve :: get($teacher_approve_id);
      $userList = user :: getAll();
      require_once('views/teacher_approve/updateFrom.php') ;
    }
    public function update()
    {
      $teacher_approve_id = $_GET['teacher_approve_id'] ;
      $user_id = $_GET['user_id'] ;
      teacher_approve :: update($teacher_approve_id,$user_id) ;
      teacher_approveController :: index();
    }
    
    public function deleteConfirm()
    {
      $teacher_approve_id =$_GET['teacher_approve_id'] ;
      $teacher_approve= teacher_approve :: get($teacher_approve_id);
      require_once('views/teacher_approve/deleteConfirm.php') ;
    }
     
    public function delete()
    {
      $teacher_approve_id =$_GET['teacher_approve_id'] ;
      teacher_approve :: delete($teacher_approve_id);
      teacher_approveController :: index() ;
    }
    
}
?>