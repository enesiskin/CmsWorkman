<?php
ob_start();
session_start();
include '../db.php';

function login_control (){

    $admin_username = $_SESSION['admin_username'];
    $admin_password = $_SESSION['admin_password'];
    $admin_check = mysqli_query($conn, "SELECT * FROM admin WHERE admin_username = '$admin_username' AND admin_password='$admin_password' ");
    $admin_count = mysqli_num_rows($admin_check);


        if($admin_count==0){
        header("Location:../index.php");

        }

}

?>