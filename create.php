<?php
include 'db/DB_conn.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
// Get post data`
$firstname = isset($_POST['firstname'])? $_POST['firstname'] : "";
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password'])? $_POST['password'] : "";
if($msg=$activity->create($firstname,$lastname,$email,$password))
{
header('Content-type: application/json');
echo json_encode($msg);
}
else
{
$err = array("result" => 0, "message" => "Error!");
header('Content-type: application/json');
echo json_encode($err);

}
}


?>
