<?php
$user="root";
$server="localhost";
$password="";
$database="semester3";

$conn=mysqli_connect($server,$user,$password);
if($conn){
	echo 'Connect';
}else{
	echo 'Cek Lagi';
}
$db=mysqli_select_db($conn,$database);
if($db){
	echo ', Db Connect';
}else{
	echo 'Cek Lagi';
}
?>