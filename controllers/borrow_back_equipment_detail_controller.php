<?php 
class borrow_back_equipment_detailController{
    public function index()
    {
        $borrow_back_equipment_detailList= borrow_back_equipment_detail :: getAll();
        require_once('views/borrow_back_equipment_detail/index_borrow_back_equipment_detail.php') ;
    }
    public function newborrow_back_equipment_detail()
    {
        $borrow_back_equipment_detailList = borrow_back_equipment_detail :: getAll();
        $borrow_backList = borrow_back :: getAll();
        $equipment_detailList = equipment_detail :: getAll() ;
    
        require_once('views/borrow_back_equipment_detail/newborrow_back_equipment_detail.php') ;
        
    }
    public function addborrow_back_equipment_detail()
    {
      $borrow_back_equipment_detail_id = $_GET['borrow_back_equipment_detail_id'] ;
      $borrow_back_id = $_GET['borrow_back_id'] ;
      $equipment_detail_id = $_GET['equipment_detail_id'] ;
      $equipment_id = $_GET['equipment_id'] ;

      MissionCountry :: addmissioncountry($borrow_back_equipment_detail_id,$borrow_back_id,$equipment_detail_id,$equipment_id) ;
      missioncountryController :: index();
    }

}
?>