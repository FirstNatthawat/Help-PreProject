<?php 
class equipmentController{
    public function index()
    {
        $equipmentList= equipment :: getAll();
        require_once('views/equipment/index_equipment.php') ;
    }
    

    public function newequipment()
    {
      $equipmentList= equipment :: getAll();
        $category_equipmentList = category_equipment :: getAll() ;
        require_once('views/equipment/newequipment.php') ;
        
    }
    public function addequipment()
    {
      $equipment_id = $_GET['equipment_id'] ;
      $categoryequipment_id = $_GET['categoryequipment_id'] ;
      $equipment_name = $_GET['equipment_name'] ;
      $quantity_equipent = $_GET['quantity_equipent'] ;
      $picture_equipment = $_GET['picture_equipment'] ;


      equipment :: addequipment($equipment_id,$categoryequipment_id,$equipment_name,$quantity_equipent,$picture_equipment) ;
      equipmentController :: index();
    }

    
    public function updateForm()
    {
      $equipment_id =$_GET['equipment_id'] ;
      $equipment= equipment :: get($equipment_id);
      $equipmentList = equipment :: getAll();
      $category_equipmentList = category_equipment :: getAll() ;
      require_once('views/equipment/updateFrom.php') ;
    }
    public function update()
    {
      $equipment_id = $_GET['equipment_id'] ;
      $categoryequipment_id = $_GET['categoryequipment_id'] ;
      $equipment_name = $_GET['equipment_name'] ;
      $quantity_equipent = $_GET['quantity_equipent'] ;
      $picture_equipment = $_GET['picture_equipment'] ;
      equipment :: update($equipment_id,$categoryequipment_id,$equipment_name,$quantity_equipent,$picture_equipment) ;
      equipmentController :: index();
    }
    
    public function deleteConfirm()
    {
      $equipment_id =$_GET['equipment_id'] ;
      $equipment= equipment :: get($equipment_id);
      require_once('views/equipment/deleteConfirm.php') ;
    }
     
    public function delete()
    {
      $equipment_id =$_GET['equipment_id'] ;
      equipment :: delete($equipment_id);
      equipmentController :: index() ;
    }
}
?>