<?php include'header.php';
include'sidebar.php';

if(isset($_POST['slider_edit'])){
    $slider_id = $_POST['slider_id'];
    $run_slider = mysqli_query($conn, "UPDATE slider SET  slider_no='".$_POST['slider_no']."' WHERE slider_id='".$slider_id."' ");

    if(mysqli_affected_rows($conn)){
        header("Location: slider.php?case=ok");
        die();

    }else{
        header("Location: slider.php?case=no");
        die();
    }
}

if(@$_GET['slider_delete']== "ok"){

    $delete_slider = mysqli_query($conn, "DELETE FROM slider  WHERE slider_id='".$_GET['slider_id']."'");

    if(mysqli_affected_rows($conn)){
        $delete_image = $_GET['delete_image'];
        unlink("$delete_image");
        header("Location: slider.php?case=ok");
        die();

    }else{
        header("Location: slider.php?case=no");
        die();
    }
}
?>

<!-- İndex Content -->

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SLIDER</h1>
                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">The change has been approved. </h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;"> Change not confirmed.</h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You have all sliders there.</h1>
                <?php } ?>

            </div>
            <div class="col-md-12">
                <a href="new_slider.php"> <button class="btn btn-success">New Slider</button></a>
                <hr>
            </div>
            <!-- Table Start -->
            <form action="" method="post">

            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                                <th>#</th>
                                <th>Slider Name</th>
                                <th>Slider Path</th>
                                <th>Slider URL</th>
                                <th>Slider Number</th>
                                <th style="width: 20px;"></th>
                                <th style="width: 20px;"></th>
                        </thead>
                        <tbody>
                        <?php
                            $edit_slider = mysqli_query($conn, "SELECT * FROM slider");
                            while($row_slider = mysqli_fetch_assoc($edit_slider)){?>
                                <tr>
                                    <td><?php echo $row_slider['slider_id'];?></td>
                                    <td><?php echo $row_slider['slider_name'];?></td>
                                    <td> <img width="200px;" src="<?php echo $row_slider['slider_path'];?>"</td>
                                    <td><?php echo $row_slider['slider_url'];?></td>
                                    <td><div class="form-group col-md-6">
                                            <input type="text" name="slider_no" class="form-control" value="<?php echo $row_slider['slider_no'];?>"></td></div>
                                    <input type="hidden" name="slider_id" value="<?php echo $row_slider['slider_id'];?>">
                                    <td><div class="col-md-12">
                                        <div class="form-group col-md-6">
                                            <input class="btn btn-success" type="submit" name="slider_edit" value="Edit Page">
                                        </div>
                                    </div></td>
                                    <td><a href="slider.php?slider_edit=<?php echo $row_slider['slider_id'];?>"><button class="btn btn-warning">Edit</button></a> </td>
                                    <td><a href="slider.php?slider_id=<?php echo $row_slider['slider_id'];?>&slider_delete=ok&delete_image=<?php echo $row_slider['slider_path']?>"><button class="btn btn-info">Delete</button></a> </td>
                                </tr>
                        <?php }?>
                        </tbody>
                    </table>
                 </div>
               </div>
            </div>
</form>
            <!-- /. Table END  -->
        </div>
        <!-- ROW END -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<?php include'footer.php'; ?>
