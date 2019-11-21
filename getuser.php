<?php
require 'connect.php';

if ($result = $db->query("SELECT * FROM users")){
	if($result->num_rows){
		
		while($row = $result->fetch_assoc()){
			$dbdata[]=$row;
		}
		$result->free();
		
		$fp = fopen('users.json', 'w');
		fwrite($fp, json_encode($dbdata));
		fclose($fp);
	}
} else {
	die($db->error);
}
?>
