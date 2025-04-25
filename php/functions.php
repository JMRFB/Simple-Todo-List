<?php

$message = '';
// insert data to db using $_get method
function InsertData(){
    global $message;
    global $alert;
    if(!empty($_GET['item'])){
        $insert = new insert($_GET['item']); //pass data to __construct
        if ($insert->InsertTask()) {
            $message = 'Task inserted successfully!';
            $alert = 'success';
        } else {
            $message = 'Insert failed.';
        }
    }
}

// Get Delete to excute function
function DeleteData(){
    global $message;
    global $alert;
    if(!empty($_GET['Delete'])){
        $del = new Delete($_GET['Delete']); //pass data to __construct
        if($del->DeleteTask()){
            $message = 'Task deleted.';
            $alert = 'warning';
        }else{
            $message = 'Delete failed.';
        }
    }
}

// Get Edit to excute function
function UpdateData(){
    global $message;
    global $alert;
    if(!empty($_GET['Edit'])){
        $up = new update($_GET['Edit']);
        if($up->UpdateTask()){
            $message = 'Task marked as completed.';
            $alert = 'info';
        }else{
            $message = 'Update failed.';
        }
    }
}

?>