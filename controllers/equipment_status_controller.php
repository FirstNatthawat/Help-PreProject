<?php 
class equipment_statusController{
    public function index()
    {
        $equipment_statusList= equipment_status :: getAll();
        require_once('views/equipment_status/index_equipment_status.php') ;
    }
   
}
?>