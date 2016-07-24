<?php
include 'connect.php';

$id = $_REQUEST['id'];
$newstatus = $_REQUEST['hours'];

$sql = "UPDATE tasks SET hours='$newstatus' WHERE taskid='$id'";
$result = mysqli_query($con,$sql);

if($result){
	echo '1';
}else{
	echo '0';
}

?>