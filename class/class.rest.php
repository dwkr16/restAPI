<?php
class REST
{
private $db;
 function __construct($conn)
{

$this->db=$conn;

}
  
  public function create($firstname,$lastname,$email,$password)
   {
       try
	   {
		  $stmt = $this->db->prepare("INSERT INTO findingn_developers.users (firstname,lastname,email,password) VALUES(:fname,:lname,:email,:pass)");
		  $stmt->bindparam(':fname',$firstname);
		  $stmt->bindparam(':lname',$lastname);
		  $stmt->bindparam(':email',$email);
		  $stmt->bindparam(':pass',$password);
		  
		  if($stmt->execute())
		  
		  {
		  
		    $data = array("result" => "1", "message" => "Successfully user added!");
} else {
$data = array("result" => 0, "message" => "Error!");
}
 
	  
		  
		  
	   }
	   catch(PDOException $e)
	    {
	      $data = array("result" => 0, "message" => "Error!");
	   
	    } 

	return $data;

}



}





?>