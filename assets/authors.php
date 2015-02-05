<?php
  
  require 'app.php';

  $authors = $db->query("SELECT * FROM authors",[],$conn);
  // var_dump($articles); 

  include 'layout.php';

 ?>


