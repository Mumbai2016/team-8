<?php
	$con=mysqli_connect('localhost','root','');
	if($con)
		echo "";
	else 
		echo "connection no done";
	
	if(mysqli_select_db($con,"cfg"))
		echo "";
	else
		echo "db no seleced";
?>