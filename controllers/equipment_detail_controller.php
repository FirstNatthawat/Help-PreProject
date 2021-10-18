<?php 
class equipment_detailController{
    public function index()
    {
        $equipment_detailList = equipment_detail :: getAll();
        require_once('views/equipment_detail/index_equipment_detail.php') ;
    }
    public function newequipment_detail()
    {   
        $equipment_detailList = equipment_detail :: getAll();
        $equipmentList = equipment :: getAll();
        require_once('views/equipment_detail/newequipment_detail.php') ;
        
    }
    public function addequipment_detail()
    {
      $equipment_detail_id = $_GET['equipment_detail_id'] ;
      $equipment_id = $_GET['equipment_id'] ;

      equipment_detail :: addequipment_detail($equipment_detail_id,$equipment_id) ;
      equipment_detailController :: index();
    }
    
    
    
    
    public function updateForm()
    {
      $equipment_detail_id =$_GET['equipment_detail_id'] ;
      $equipment_detail= equipment_detail :: get($equipment_detail_id);
      $equipmentlList = equipment :: getAll();
      
      require_once('views/equipment_detail/updateFrom.php') ;
    }


    public function update()
    {
      $equipment_detail_id = $_GET['equipment_detail_id'] ;
      $equipment_id = $_GET['equipment_id'] ;
      equipment_detail :: update($equipment_detail_id,$equipment_id) ;
      equipment_detailController :: index();
    }
    
    public function deleteConfirm()
    {
      $equipment_detail_id =$_GET['equipment_detail_id'] ;
      $equipment_detail= equipment_detail :: get($equipment_detail_id);
      require_once('views/equipment_detail/deleteConfirm.php') ;
    }
     
    public function delete()
    {
      $equipment_detail_id =$_GET['equipment_detail_id'] ;
      equipment_detail :: delete($equipment_detail_id);
      equipment_detailController :: index() ;
    }
}
?>