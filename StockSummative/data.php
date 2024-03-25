<?php
  $jsonData = file_get_contents('data/users.json');
  
  header('Content-Type: application/json');
  echo $jsonData;
?>
<!--
  Jeremy Chong, Krish Patel, Mika Vohl
  06/14/2023
  Data page
  This holds the JSON file for PHP and allows the Java file to access this file.
  THIS COMMENT MUST BE BELOW TO MAINTAIN FUNCTIONALITY
-->