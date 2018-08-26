<?php

$host="localhost";
$db_user="root";
$db_name="fcm_db";
$password="";
$con=mysqli_connect($host,$db_user,$password,$db_name);
if($con)
{
	echo "connection establish";
}
else 
{
	echo "error";

}

?>