<?php 
class borrow_back_status_teacherController{
    public function index()
    {
        $borrow_back_status_teacherList= borrow_back_status_teacher :: getAll();
        require_once('views/borrow_back_status_teacher/index_borrow_back_status_teacher.php') ;
    }
    public function newborrow_back_status_teacher()
    {
        $borrow_back_status_studentList = borrow_back_status_teacher :: getAll();
        $statusList = status :: getAll() ;
        require_once('views/borrow_back_status_teacher/newborrow_back_status_teacher.php') ;
        
    }
    public function addborrow_back_status_teacher()
    {
      $borrow_back_id = $_GET['borrow_back_id'] ;
      
      $st2 = $_GET['st2'] ;


      borrow_back_status_teacher :: addborrow_back_status_teacher($borrow_back_id,$st2) ;
      borrow_back_status_teacherController :: index();
    }

   
   
}
?>