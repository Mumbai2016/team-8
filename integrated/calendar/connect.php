

<?php 
$servername = "localhost";
/*
$username = "cal_view";
$password = "shesh";

*/
$username = "root";
$password = "root";

$dbname = "rait_calendar_sys";
$content="";
// Create connection
/*
$conn = new mysqli($servername, $username, $password,$dbname,3333);
*/
$conn = new mysqli($servername, $username, $password,$dbname);
if(!$conn)
	echo mysqli_error($conn);
?>
