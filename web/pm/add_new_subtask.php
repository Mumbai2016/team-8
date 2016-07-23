<?php
include 'connect.php';

$newtask = $_REQUEST['newsubtask'];
$id = $_REQUEST['id'];
$oda = "finance";

$sql="INSERT into tasks(`task_name`,`proj_id`,`odarea`,`vol_req`,`status`) VALUES('$newtask','$id','$oda','yes','incomplete')";
$result = mysqli_query($con,$sql);

echo mysqli_error($con);
if($result){
	echo '1';
}else{
	echo '0';
}

?>