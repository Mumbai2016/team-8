<?php
include 'connect.php';

$id = $_REQUEST['id'];
$newstatus = $_REQUEST['newstatus'];
$sql = "UPDATE volunteer_status SET status='$newstatus' WHERE vid='$id'";
$result = mysqli_query($con,$sql);

if($result){
	echo '1';
}else{
	echo '0';
}

?>