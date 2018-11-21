<?php
    include'../db.php';

    $run_config = "SELECT * FROM config";
    $conn_config= mysqli_query($conn,$run_config);
    $row_config = mysqli_fetch_assoc($conn_config);


    if(isset($_POST['login'])){
        $admin_username = $_POST['admin_username'];
        $admin_password = md5($_POST['admin_password']);
        if(!empty($_POST['admin_username']) && !empty($_POST['admin_password'])){

            $con_login = mysqli_query($conn, "SELECT * FROM admin WHERE admin_username = '$admin_username' AND admin_password='$admin_password' ");
            $count_admin = mysqli_num_rows($con_login);

                if ($count_admin == 1) {
                    $_SESSION['admin_username'] = $admin_username;
                    $_SESSION['admin_password'] = $admin_password;
                    $date = date('Y-m-d H:i:s');
                    $run_date = mysqli_query($conn,"UPDATE admin SET last_date = '$date' ");
                    header('Location: index.php');
                    die();
                } else {
                    header('Location: login.php?login=no');
                    die();
                }
        }else{
            header('Location: login.php?login=empty');
            die();}
    }elseif(!isset($_SESSION['admin_username'])){
    header('Location: login.php?login=first');
    die();}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Workman Admin Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">PANEL V1</a>
        </div>

        <div class="header-right">

            <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
            <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
            <a href="logout.php" class="btn btn-danger" title="Logout" name="logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

        </div>
    </nav>
