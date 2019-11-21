<?php
$db = new mysqli('localhost', 'root', '', 'test');
  if ($db->connect_errno) {
     die("Failed to connect to database!");
  }
?>