<?php 
class borrow_backController{
    public function index()
    {
        $borrow_backList= borrow_back :: getAll();
        require_once('views/borrow_back/index_borrow_back.php') ;
    }
    
}
?>