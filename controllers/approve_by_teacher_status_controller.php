<?php 
class approve_by_teacher_statusController{
    public function index()
    {
        $approve_by_teacher_statusList= approve_by_teacher_status :: getAll();
        require_once('views/approve_by_teacher_status/index_approve_by_teacher_status.php') ;
    }
    public function newapprove_by_teacher_status()
    {
        $approve_by_teacher_statusList = approve_by_teacher_status :: getAll();
        $userList = user :: getAll() ;
        $statusList = status :: getAll() ;
        require_once('views/approve_by_teacher_status/newapprove_by_teacher_status.php') ;
        
    }
    
    public function updateForm()
    {
      $borrow_back_id =$_GET['borrow_back_id'] ;
      $borrow_back_id= approve_by_teacher_status :: get($borrow_back_id);
      $userList = user :: getAll();
      $statusList = status :: getAll() ;
      require_once('views/approve_by_teacher_status/updateFrom.php') ;
    }
    public function update()
    {
      $borrow_back_id = $_GET['borrow_back_id'] ;
      $user_id = $_GET['user_id'] ;
      $status_id = $_GET['status_id'] ;
      approve_by_teacher_status :: update($borrow_back_id,$user_id,$status_id) ;
      approve_by_teacher_statusController :: index();
    }
    
    
}
?>