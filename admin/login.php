<?php
session_start();
$result = " ";
    if(isset($_GET['login'])) {
        if (@$_GET['login'] == "no") {
            $result = "Check again your Username and password.";
        } elseif (@$_GET['login'] == "empty") {
            $result = "Please fill blank.";
        }elseif (@$_GET['login'] == "first") {
            $result = "Login first.";
        }
    }
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Bootstrap Advance Admin Template</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
      body{ background-image: url("assets/img/bg.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          background-position: center;}
  </style>
</head>
<body >
    <div style="margin-top: auto;" class="container">
        <div class="row text-center " style="padding-top:100px;"> </div>
        <div  class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div style="background-color:whitesmoke; opacity:0.9; margin-top: 40px;" class="panel-body">
                    <h3 style="text-align: center"><b>LOGIN AREA</b></h3>
                    <hr/>
                    <?php
                        echo $result ;
                    ?>
                    <form method="post" role="form" action="index.php">
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input type="text" class="form-control" name="admin_username" placeholder="Your Username " />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password" class="form-control" name="admin_password"  placeholder="Your Password" />
                        </div>
                     <button style="width: 100%;" class="btn btn-primary" type="submit" name="login">Login Now</button>
                        <br />
                        <br />
                    <div style="text-align: end;"><i>Click to return to <a href="../index.php">Home</a>.</i></div>
                 </form>
             </div>
         </div>
     </div>
 </div>

</body>
</html>
