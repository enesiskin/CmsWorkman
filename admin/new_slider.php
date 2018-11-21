<?php include 'header.php';
include 'sidebar.php';

if(isset($_POST['save_slider'])){

    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_size = $_FILES ['image']['size'];
    $image_ext = pathinfo($image_name,PATHINFO_EXTENSION);
    $slider_path = 'uploads/'.$image_name.'';
    $slider_db_path = 'uploads/'.$image_name.'';
    move_uploaded_file($image_tmp,$slider_path);

    $insert_slider = mysqli_query($conn, "INSERT INTO slider(slider_path,slider_url,slider_no,slider_name) VALUES ('".$slider_db_path."','".$_POST['slider_url']."','".$_POST['slider_no']."','".$_POST['slider_name']."')");


    if(mysqli_affected_rows($conn)){
           header("Location: new_slider.php?case=ok");
            die();

    }else{
        header("Location: new_slider.php?case=no");
        die();
    }
}?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">New Slider</h1>

                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">The change has been approved.</h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Change not confirmed.</h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You can add slider</h1>
                <?php } ?>
            </div>
        </div>
        <!-- Form -->
        <form action="new_slider.php" method="post" enctype="multipart/form-data" >
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-3">Slider İmage</label>
                    <div class="">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-file btn-info">
                                <span class="fileupload-new">Select File</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" name="image">
                            </span>
                            <span class="fileupload-preview"></span>
                            <a href="" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">x</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Slider Name:</label>
                    <input class="form-control" type="text" name="slider_name" placeholder="Slider Name">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Slider Link:</label>
                    <input class="form-control" type="text" name="slider_url" value="http://">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-3">
                    <label>Slider Number:</label>
                    <input class="form-control" type="number" name="slider_no" value="Slider Number">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <input class="btn btn-success" type="submit" name="save_slider" value="New Slider">
                </div>
            </div>
        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include'footer.php'; ?>
