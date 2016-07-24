<?php
include 'connect.php';

$id = $_REQUEST['id'];
$volunteer_name = $_REQUEST['volunteer_name'];

$sql = "UPDATE tasks SET vol_name='$volunteer_name',vol_req='no' WHERE taskid='$id'";
$result = mysqli_query($con,$sql);

if($result){
	echo '1';
}else{
	echo '0';
}

include 'sms/index.php';

?>