<?php 
class borrow_back_statusController{
    public function index()
    {
        $borrow_back_statusList= borrow_back_status :: getAll();
        require_once('views/borrow_back_status/index_borrow_back_status.php') ;
    }

    public function updateForm()
    {
      $borrow_back_id =$_GET['borrow_back_id'] ;
      $borrow_back_status= borrow_back_status :: get($borrow_back_id);
      $statusList = status :: getAll();
      
      require_once('views/borrow_back_status/updateFrom.php') ;
    }
    public function update()
    {
      $borrow_back_id = $_GET['borrow_back_id'] ;
      $st1 = $_GET['st1'] ;
      $st2 = $_GET['st2'] ;
      $st3 = $_GET['st3'] ;
      borrow_back_status :: update($borrow_back_id,$st1,$st2,$st3) ;
      borrow_back_statusController :: index();
    }
    
   
}
?>