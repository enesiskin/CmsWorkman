<?php include'header.php';
include'sidebar.php';



if(isset($_POST['config_sub'])) {

        $id=0;

        $config_up=mysqli_query($conn, "UPDATE config SET config_phone='".$_POST['config_phone']."',config_title='".$_POST['config_title']."',config_desc ='".$_POST['config_desc']."',config_keywords='".$_POST['config_keywords']."',config_face='".$_POST['config_face']."',config_twit='".$_POST['config_twitter']."',config_footer='".$_POST['config_footer']."',config_address='".$_POST['config_address']."',config_email='".$_POST['config_email']."',config_fax='".$_POST['config_fax']."',config_author='".$_POST['config_author']."' WHERE config_id='$id'");

        if(mysqli_affected_rows($conn))
            {
                header("Location:settings.php?durum=ok");
                die();
            }
        else {
            header("Location:settings.php?durum=no");
            die();
        }
}
?>

<!-- İndex Content -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Website Settings</h1>

                <?php if(@$_GET['durum']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">The change has been approved. </h1>
                 <?php }elseif(@$_GET['durum']=="no"){?>
                         <h1 class="page-subhead-line" style="color: red;">Change not confirmed.</h1>
                <?php } else{ ?>
                        <h1 class="page-subhead-line">You can manage to settings.</h1>
                <?php } ?>
            </div>
        </div>
        <form action="settings.php" method="POST">
            <div class="col-md-12">
            <div class="form-group col-md-5">
                <label>Phone:</label>
                <input class="form-control" type="text" name="config_phone" value="<?php echo $row_config['config_phone']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-5">
                <label>Title:</label>
                <input class="form-control" type="text" name="config_title" value="<?php echo $row_config['config_title']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-9">
                <label>Description:</label>
                <input class="form-control" type="text" name="config_desc" value="<?php echo $row_config['config_desc']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Keywords:</label>
                <input class="form-control" type="text" name="config_keywords" value="<?php echo $row_config['config_keywords']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-4">
                <label>Facebook:</label>
                <input class="form-control" type="text" name="config_face" value="<?php echo $row_config['config_face']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-4">
                <label>Twitter:</label>
                <input class="form-control" type="text" name="config_twitter" value="<?php echo $row_config['config_twit']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-9">
                <label>Footer:</label>
                <input class="form-control" type="text" name="config_footer" value="<?php echo $row_config['config_footer']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-9">
                <label>Address:</label>
                <input class="form-control" type="text" name="config_address" value="<?php echo $row_config['config_address']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-4">
                <label>E-Mail:</label>
                <input class="form-control" type="text" name="config_email" value="<?php echo $row_config['config_email']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-4">
                <label>Fax Number:</label>
                <input class="form-control" type="text" name="config_fax" value="<?php echo $row_config['config_fax']; ?>">
            </div> </div>

            <div class="col-md-12">
            <div class="form-group col-md-4">
                <label>Author:</label>
                <input class="form-control" type="text" name="config_author" value="<?php echo $row_config['config_author']; ?>">
            </div> </div>

            <div  class="col-md-12">
                <div  class="form-group col-sm-4">
                <input  class="btn btn-success" type="submit" name="config_sub" value="Submit"></div> </div>
        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include'footer.php'; ?>