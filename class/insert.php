<?php

class insert extends config{
    public $Newtask;    

    // __construct() = It's the constructor method in a class — it automatically runs when you create a new object.
    // Think of it as a setup function for the object.
    public function __construct($task){
        $this->Newtask = $task;
    }
    // method to insert a task
    public function InsertTask(){
        $con = $this->con(); //connetion
        $sql = "INSERT INTO `tbl_todolist`(`item`)VALUES('$this->Newtask')"; // INSERT INTO in SQL (MySQL, etc.) is used to add new data (a new row) to a table in your database.
        $data = $con->prepare($sql); // preparing sql like writting command to insert into DB, It’s part of using prepared statements in PDO (PHP Data Objects). Prepared statements help make your SQL safer and more secure.

        // var_dump($data); to test sql
        // $data->excute(); excuting $data, insert data into Db
        if($data->execute()){
            return true;
        }else{
            return false;
        }
       
    }
}


?>