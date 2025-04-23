<?php
// config.php = connection to database

// class{
// propeties
//
//function nameof funtion(){
//
//}
//}
class config{
    private $user ='root';
    private $password ='';
    public $pdo = null;

   public function con(){
    try {
        // 'mysql:host=localhost;dbname=todoapp' = connetion string
        //$this = is a special variable used inside a class to refer to the current object instance.
        $this->pdo = new PDO('mysql:host=localhost;dbname=todoapp',$this->user,$this->password);
    } catch (PDOException $e) {
        // if connection failed run code below
        die($e->getMessage());
    }
    //if success
    return $this->pdo;
   }
}

?>