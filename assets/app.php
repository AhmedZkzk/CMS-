<?php 
	
	// name space decleration
  namespace App\DB; 

  //requir files
  require 'database.php'; 
  require 'db.php';
  //create db object
  $db = new DB($config);
  //get the PDO object or connection
  $conn = $db->connect();
  //check connection success
  if(!$conn) die("ERROR IN DB CONNECTION");
	
 ?>