<?php
/*
Author: Diwakar Kumar
Website: http://stunet.in
Email:dwkr16@gmail.com

*/

$dsn="mysql:host=localhost;dbname=geek_blog";
$username="root";
$password="tiger";


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

include 'class/class.rest.php';
$activity= new REST($conn);

?>
