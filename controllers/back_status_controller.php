<?php 
class back_statusController{
    public function index()
    {
        $back_statusList= back_status :: getAll();
        require_once('views/back_status/index_back_status.php') ;
    }
    
    
    public function updateForm()
    {
      $borrow_back_id =$_GET['borrow_back_id'] ;
      $borrow_back_id= back_status :: get($borrow_back_id);
      $statusList = status :: getAll() ;
      require_once('views/back_status/updateFrom.php') ;
    }
    public function update()
    {
      $borrow_back_id = $_GET['borrow_back_id'] ;
      
      $status_id = $_GET['status_id'] ;
      back_status :: update($borrow_back_id,$status_id) ;
      back_statusController :: index();
    }
    
    
}
?>