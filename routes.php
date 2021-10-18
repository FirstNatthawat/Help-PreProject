<?php

    $controllers = array('pages'=>['error','home','login','logout'],
    'category_equipment'=>['index','newcategory_equipment','addcategory_equipment','updateForm','update','deleteConfirm','delete'],
    'equipment'=>['index','newequipment','addequipment','updateForm','update','deleteConfirm','delete'],
    'equipment_detail'=>['index','newequipment_detail','addequipment_detail','updateForm','update','deleteConfirm','delete'],
    'user'=>['index','newuser','adduser','updateForm','update','deleteConfirm','delete'],
    'position'=>['index'],
    'status'=>['index'],
    'borrow_back'=>['index'],
    'teacher_approve'=>['index','newteacher_approve','addteacher_approve','updateForm','update','deleteConfirm','delete'],
    'borrow_back_status'=>['index','newborrow_back_status','addborrow_back_status','updateForm','update','deleteConfirm','delete'],
    'approve_by_teacher_status'=>['index','newapprove_by_teacher_status','addapprove_by_teacher_status','updateForm','update','deleteConfirm','delete'],
    'borrow_back_equipment_detail'=>['index','newborrow_back_equipment_detail','addborrow_back_equipment_detail','updateForm','update','deleteConfirm','delete'],
    'equipment_status'=>['index'],
    'borrow_back_status_student'=>['index','newborrow_back_status_student','addborrow_back_status_student','updateForm','update','deleteConfirm','delete'],
    'borrow_back_status_teacher'=>['index','newborrow_back_status_teacher','addborrow_back_status_teacher','updateForm','update','deleteConfirm','delete'],
    'back_status'=>['index','newback_status','addback_status','updateForm','update','deleteConfirm','delete']);
    function call($controller, $action)
    {
       require_once("controllers/".$controller."_controller.php");
       switch($controller)
       {
           case "pages" :
               require_once("models/userModel.php");
               require_once("models/positionModel.php");
               $controller = new PagesController();
               break;

           case "category_equipment" : 
            require_once("models/category_equipmentModel.php");
           $controller = new category_equipmentController();
           break;

           case "borrow_back" : 
            require_once("models/borrow_backModel.php");
           $controller = new borrow_backController();
           break;


           case "equipment" : 
            require_once("models/equipmentModel.php");
            require_once("models/category_equipmentModel.php");

           $controller = new equipmentController();
           break;
           


           case "equipment_detail" : 
            require_once("models/equipment_detailModel.php");
            require_once("models/equipmentModel.php");
            require_once("models/category_equipmentModel.php");
           $controller = new equipment_detailController();
           break;

           case "borrow_back_status" : 
            require_once("models/borrow_back_statusModel.php");
            require_once("models/statusModel.php");
            require_once("models/userModel.php");
           $controller = new borrow_back_statusController();
           break;

           case "borrow_back_status_student" : 
            require_once("models/borrow_back_status_studentModel.php");
            require_once("models/statusModel.php");
            require_once("models/userModel.php");
           $controller = new borrow_back_status_studentController();
           break;

           case "borrow_back_status_teacher" : 
            require_once("models/borrow_back_status_teacherModel.php");
            require_once("models/statusModel.php");
            require_once("models/userModel.php");
           $controller = new borrow_back_status_teacherController(); 
           break;



           case "approve_by_teacher_status" : 
            require_once("models/approve_by_teacher_statusModel.php");
            require_once("models/statusModel.php");
            require_once("models/userModel.php");
           $controller = new approve_by_teacher_statusController();
           break;

           case "back_status" : 
            require_once("models/back_statusModel.php");
            require_once("models/statusModel.php");
            require_once("models/userModel.php");
           $controller = new back_statusController();
           break;

           case "borrow_back_equipment_detail" : 
            require_once("models/borrow_back_equipment_detailModel.php");
            require_once("models/borrow_backModel.php");
            require_once("models/equipment_detailModel.php");
            require_once("models/equipmentModel.php");
           $controller = new borrow_back_equipment_detailController();
           break;

           case "equipment_status" : 
            require_once("models/equipment_statusModel.php");
            require_once("models/equipmentModel.php");
            require_once("models/equipment_detailModel.php");
            require_once("models/borrow_back_equipment_detailModel.php");
            require_once("models/borrow_backModel.php");
            require_once("models/statusModel.php");
            
           $controller = new equipment_statusController();
           break;

           case "position" : 
            require_once("models/positionModel.php");
           $controller = new positionController();
           break;

           
           case "user" : 
            require_once("models/userModel.php");
            require_once("models/positionModel.php");
           $controller = new userController();
           break;


           case "status" : 
            require_once("models/statusModel.php");
           $controller = new statusController();
           break;

           case "teacher_approve" : 
            require_once("models/teacher_approveModel.php");
            require_once("models/userModel.php");
           $controller = new teacher_approveController();
           break;



        }
       $controller->{$action}();
    }

    if(array_key_exists($controller,$controllers))
    {
        if(in_array($action,$controllers[$controller])){
            call($controller,$action);
        }
        else{
            call('pages','error');
        }
    }
    else{
        call('pages','error');
    }
?>
