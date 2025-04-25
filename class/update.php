<?php

// update function
class update extends config{
  public $update;
  public function __construct($updateId){
    $this->update = $updateId;
  }
  public function UpdateTask(){
    $con = $this->con();
    $sql = "UPDATE `tbl_todolist` SET `status`='Completed', `date_completed`=NOW() WHERE `id` = '$this->update'";
    $data = $con->prepare($sql);
    if($data->execute()){
        return true;
    }else{
        return false;
    }
  }
}





?>