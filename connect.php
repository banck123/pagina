<?php session_start();

$servername="localhost";
$username="goldbwdo_hope";
$password="Hope1,11";
$dbname="goldbwdo_hope";
$conn=new MySQLi($servername,$username,$password,$dbname);
if($conn->connect_error) {
	die("Please wait, we will be up in moments...");
}

$servername="localhost";
$username="goldbwdo_hope";
$password="Hope1,11";
$dbname="goldbwdo_hope";
$conn=new MySQLi($servername,$username,$password,$dbname);
if($conn->connect_error) {
	die("Please wait, we will be up in moments...");
}
$db = new PDO('mysql:host=localhost;dbname=goldbwdo_hope;charset=utf8', 'goldbwdo_hope', 'Hope1,11'); 
$conk=mysqli_connect("localhost","goldbwdo_hope","Hope1,11","goldbwdo_hope");




?>