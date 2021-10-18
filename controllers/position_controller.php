<?php 
class positionController{
    public function index()
    {

        $positionList= position :: getAll();
        require_once('views/position/index_position.php') ;
    }
    
}
?>