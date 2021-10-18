<?php 
class category_equipmentController{
    public function index()
    {
        $category_equipmentList = category_equipment :: getAll();
        require_once('views/category_equipment/index_category_equipment.php') ;
    }
    public function newcategory_equipment()
    {
        $category_equipmentList = category_equipment :: getAll();
        
        require_once('views/category_equipment/newcategory_equipment.php') ;
        
    }
    public function addcategory_equipment()
    {
      $categoryequipment_id = $_GET['categoryequipment_id'] ;
      $categoryequipment_name = $_GET['categoryequipment_name'] ;


      category_equipment :: addcategory_equipment($categoryequipment_id,$categoryequipment_name) ;
      category_equipmentController :: index();
    }
    
    
    
    
    public function updateForm()
    {
      $categoryequipment_id =$_GET['categoryequipment_id'] ;
      $category_equipment= category_equipment :: get($categoryequipment_id);
      $category_equipmentList = category_equipment :: getAll();

      require_once('views/category_equipment/updateFrom.php') ;
    }
    public function update()
    {
      $categoryequipment_id = $_GET['categoryequipment_id'] ;
      $categoryequipment_name = $_GET['categoryequipment_name'] ;
      category_equipment :: update($categoryequipment_id,$categoryequipment_name) ;
      category_equipmentController :: index();
    }
    
    public function deleteConfirm()
    {
      $categoryequipment_id =$_GET['categoryequipment_id'] ;
      $category_equipment= category_equipment :: get($categoryequipment_id);
      require_once('views/category_equipment/deleteConfirm.php') ;
    }
     
    public function delete()
    {
      $categoryequipment_id =$_GET['categoryequipment_id'] ;
      category_equipment :: delete($categoryequipment_id);
      category_equipmentController :: index() ;
    }
}
?>