<?php

//to view data that is pending
class Delete extends config{

    public $delete;
    public function __construct($del){
        $this->delete = $del;
    }

    public function DeleteTask(){
        $con = $this->con();
        $sql = "DELETE FROM `tbl_todolist` WHERE `id` = $this->delete";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }
    }
}

?>