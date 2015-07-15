<?php


if($_SERVER['REQUEST_METHOD']=="GET"&&isset($_GET['state'])){
	
  $state = $_GET['state'];
	

$file = fopen("state.txt", "w") or die("Unable to open file!");

fwrite($file, $state);
fclose($file);  

} #Request

?>