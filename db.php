<?php
ob_start();
session_start();?>
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'workman';

$conn = mysqli_connect($server,$user,$password,$db);
mysqli_set_charset($conn,"utf8");



if(!$conn){
    die("Connection Failed!:".mysqli_connect_error());
}
?>