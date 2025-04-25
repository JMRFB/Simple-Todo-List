<?php

// to view data that is pending
class view extends config{
    public function ViewData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'Pending'";
        $view_data = $con->prepare($sql);
        $view_data->execute();
        $result = $view_data->fetchAll(PDO::FETCH_ASSOC); //fetch all data
        return $result; 
        
    }

// to view data that is complete 
    public function ViewCompletedData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'Completed'";
        $view_data = $con->prepare($sql);
        $view_data->execute();
        $result = $view_data->fetchAll(PDO::FETCH_ASSOC); //fetch all data
        return $result; 
        
    }
}


?>