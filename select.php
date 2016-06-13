<?php

 include 'db/DB_conn.php';
 $id = $_GET['id'];
 
 if(empty($id)){
 	$data = array("result" => 0, "message" => "Wrong user id try again with different user id!");
 } 
 else 
 {
    $msg=$activity->select($id);
    
    header("Content-type: application/json");
    echo json_encode($msg);
    
 }
 ?>