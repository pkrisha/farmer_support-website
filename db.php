<?php 
if (!isset($DB_SERVER_NAME))
{
	//define("DB_SERVER_NAME","localhost");
	$DB_SERVER_NAME ="localhost";
}
if (!isset($DB_USER_NAME))
{
	//define("DB_USER_NAME","root");
	$DB_USER_NAME = "root";
}
if (!isset($DB_PASSWORD))
{
	//define("DB_USER_NAME","root");
	//$DB_PASSWORD = "hareeomm";
}

//define("DB_PASSWORD","hareeomm");
if (!isset($DB_DATABASE_NAME))
{
	//define("DB_USER_NAME","root");
	$DB_DATABASE_NAME = "transport";
}

//define("DB_DATABASE_NAME","transport");

$conn=mysqli_connect($DB_SERVER_NAME, $DB_USER_NAME) ;
mysqli_select_db($DB_DATABASE_NAME, $conn);
?>
