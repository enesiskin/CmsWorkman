<?php include 'header.php';
include 'sidebar.php';

if(isset($_POST['save_service'])){

    $image_name = $_FILES['images']['name'];
    $image_tmp = $_FILES['images']['tmp_name'];
    $image_size = $_FILES ['images']['size'];
    $image_ext = pathinfo($image_name,PATHINFO_EXTENSION);
    $services_path = 'uploads/service_image/'.$image_name.'';
    $services_db_path = 'uploads/service_image/'.$image_name.'';
    move_uploaded_file($image_tmp,$services_path);

    $services_date= date('Y-m-d H:i');

    $insert_service = mysqli_query($conn, "INSERT INTO services(services_path,services_detail,services_date,services_name) VALUES ('".$services_db_path."','".$_POST['services_detail']."','".$services_date."','".$_POST['services_name']."')");


    if(mysqli_affected_rows($conn)){
           header("Location: new_services.php?case=ok");
            die();

    }else{
        header("Location: new_services.php?case=no");
        die();
    }
}?>

<head>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"> </script>
</head>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">New Service</h1>

                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">The change has been approved.</h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Change not confirmed.</h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You can add new service</h1>
                <?php } ?>
            </div>
        </div>
        <!-- Form -->
        <form action="new_services.php" method="post" enctype="multipart/form-data" >
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-3">Service İmage</label>
                    <div class="">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-file btn-info">
                                <span class="fileupload-new">Select File</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" name="images">
                            </span>
                            <span class="fileupload-preview"></span>
                            <a href="" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">x</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Service Name:</label>
                    <input class="form-control" type="text" name="services_name" placeholder="Service Name" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-12">
                    <label>Service Detail:</label>
                    <textarea name="services_detail" class="ckeditor"></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <input class="btn btn-success" type="submit" name="save_service" value="New Service">
                </div>
            </div>
        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include'footer.php'; ?>
