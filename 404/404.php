<?php
$fn = ($p = key($_GET)) ? 'trinity/' . $p . '/index.php' : 'trinity/index.php';
 
(file_exists($fn)) ? require $fn : require 'notfound.php'; 
?>