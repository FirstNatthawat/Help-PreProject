<?php
class borrow_back{
  
    public $borrow_back_id;
    public $user_id ;
    public $borrow_back_purpose ;
    public $teacher_approve_id;
    public $borrow_daytime ;
    public $back_daytime;
    public $time_stamp;
    public $approve_by_teacher_status ;
    public $borrow_status;
    public $back_status ;
   
public function __construct($borrow_back_id ,$user_id 
,$borrow_back_purpose,$teacher_approve_id,$borrow_daytime
,$back_daytime,$time_stamp,$approve_by_teacher_status,$borrow_status
,$back_status  )
{
    $this->borrow_back_id =$borrow_back_id ;
    $this->user_id =$user_id ;
    $this->borrow_back_purpose =$borrow_back_purpose ;
    $this->teacher_approve_id =$teacher_approve_id ;
    $this->borrow_daytime =$borrow_daytime ;

    $this->back_daytime =$back_daytime ;
    $this->time_stamp =$time_stamp ;
    $this->approve_by_teacher_status =$approve_by_teacher_status ;
  
    $this->borrow_status =$borrow_status ;

    
    $this->back_status =$back_status ;
    
   
    
}

public static function getAll()
{
  
    $borrow_backList = [];
    require("connection_connect.php");
    $sql ="select * FROM borrow_back ";
    
    $result= $conn->query($sql);
    while ($my_row=$result->fetch_assoc())
    {
        $borrow_back_id = $my_row["borrow_back_id"];
        $user_id = $my_row["user_id"] ;
        
        $borrow_back_purpose = $my_row["borrow_back_purpose"] ;
        $teacher_approve_id = $my_row["teacher_approve_id"];
        $borrow_daytime = $my_row["borrow_daytime"];

        $back_daytime = $my_row["back_daytime"];
        $time_stamp = $my_row["time_stamp"] ;
        $approve_by_teacher_status = $my_row["approve_by_teacher_status"];
      
        $borrow_status = $my_row["borrow_status"] ;
        
      
        $back_status = $my_row["back_status"];
       
        
        $borrow_backList[] = new borrow_back($borrow_back_id ,$user_id 
        ,$borrow_back_purpose,$teacher_approve_id,$borrow_daytime
        ,$back_daytime,$time_stamp,$approve_by_teacher_status,$borrow_status
        ,$back_status  );
        
    }
    require("connection_close.php");
    return $borrow_backList ;
}


}
?>