<?php 
class borrow_back_status_studentController{
    public function index()
    {
        $borrow_back_status_studentList= borrow_back_status_student :: getAll();
        require_once('views/borrow_back_status_student/index_borrow_back_status_student.php') ;
    }

    public function newborrow_back_status_student()
    {
        $borrow_back_status_studentList = borrow_back_status_student :: getAll();
        $statusList = status :: getAll() ;
        require_once('views/borrow_back_status_student/newborrow_back_status_student.php') ;
        
    }
    public function addborrow_back_status_student()
    {
      $borrow_back_id = $_GET['borrow_back_id'] ;
      $st1 = $_GET['st1'] ;
      $st2 = $_GET['st2'] ;


      borrow_back_status_student :: addborrow_back_status_student($borrow_back_id,$st1,$st2) ;
      borrow_back_status_studentController :: index();
    }
   
}
?>