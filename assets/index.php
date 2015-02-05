<?php
  require 'app.php';

  $articles = $db->query("SELECT * FROM articles",[],$conn);
  
  include 'layout.php';

 ?>

