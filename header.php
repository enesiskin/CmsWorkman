<?php
include 'db.php';
include 'seo.php';
$run_config= "SELECT * FROM config";
$con_config= mysqli_query($conn,$run_config);
$row_config = mysqli_fetch_assoc($con_config);


?>

<base href="http://localhost/workman/">
<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo $row_config['config_title']; ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $row_config['config_desc']; ?>">
    <meta name="keywords" content="<?php echo $row_config['config_keywords']; ?>">
    <meta name="author" content="<?php echo $row_config['config_author']; ?>">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet"/>
    <script src="js/jquery-1.6.3.min.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/NewsGoth_BT_400.font.js"></script>
    <script src="js/FF-cash.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.3.js"></script>
    <script src="js/tms_presets.js"></script>
    <script src="js/easyTooltip.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page1">
<div class="extra">
    <div class="main">
        <!--==============================header=================================-->
        <header>
            <div class="indent">
                <div class="row-top">
                    <div class="wrapper">
                        <img style="margin: 30px 0px 0px 30px;" src="<?php echo $row_config['config_logo']; ?>">
                        <strong class="support"><?php echo $row_config['config_phone']; ?></strong> </div>
                </div>
                <nav>
                    <ul class="menu">
                        <li><a class="active" href="index.php">Home</a></li>
                      <?php
                            $count_sql= mysqli_query($conn,"SELECT * FROM menu");
                            $count_menu = mysqli_num_rows($count_sql);
                            $count=0;
                                while($row_menu=mysqli_fetch_assoc($count_sql)){
                                    $count++; ?>

                                 <li class="<?php
                                    if($count_menu == $count){
                                        echo "last";
                                    }


                                 ?>"><a href="<?php echo $row_menu['menu_url'];?>"><?php echo $row_menu['menu_name'];?> </a></li>
                      <?php   }     ?>

                </nav>
            </div>
        </header>