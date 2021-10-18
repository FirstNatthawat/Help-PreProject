<?php 
class statusController{
    public function index()
    {
        $statusList= status :: getAll();
        require_once('views/status/index_status.php') ;
    }
    
}
?>