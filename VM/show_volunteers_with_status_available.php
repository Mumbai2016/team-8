<?php

include "connect.php";
header('Content-Type: application/json');

$sql="SELECT * from volunteer_status WHERE status LIKE 'available'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	 echo $row['vid'];
}
?>