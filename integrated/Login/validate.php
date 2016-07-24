<?php
session_start();

// Grab User submitted information
$username = $_POST["uid"];
$pass = $_POST["pass"];

// Connect to the database
$con = mysql_connect("ec2-54-169-193-77.ap-southeast-1.compute.amazonaws.com","force","root");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("cfg",$con);




//encrypt function
function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}




//validate from database

$result = mysql_query("SELECT * FROM `usertable` WHERE username='$username' ;");

$row = mysql_fetch_array($result);

$epass=encryptIt($pass);

if($row["username"]==$username && $row["password"]==$epass)
{
			$_SESSION['login'] = "$username";

			if($row['role']=="vm")
				header('Location: ../VM/');  
			else if($row['role']=="pm")
				header('Location: ../PM/');  
			else if($row['role']=="volunteer"){
				$_SESSION['points'] = $row['points'];
				header('Location: ../Volunteer/volunteer_home.php'); 
			}
}

else
{
	header('Location: ../Login/index.html'); 
}
?>