<?php
$dsn="mysql:host=localhost;dbname=findingn_developers";
$username="findingn_dwkr";
$password="tiger1234512345";


 try
  {
$conn=new PDO($dsn,$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo'connected';
  }
  catch(PDOException $e)
  {
   echo $e->getMessage();
  
  }

include 'class.rest.php';
$activity= new REST($conn);

?>