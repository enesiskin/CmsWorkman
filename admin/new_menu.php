<?php include 'header.php';
include 'sidebar.php';

if(isset($_POST['save_menu'])){

    $run_menu = mysqli_query($conn, "INSERT INTO menu(menu_name,menu_url) VALUES('".$_POST['menu_name']."','".$_POST['menu_url']."') ");

    if(mysqli_affected_rows($conn)){
           header("Location: new_menu.php?case=ok");
            die();

    }else{
        header("Location: new_menu.php?case=no");
        die();
    }
}

?>




<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">New Menu</h1>

                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">Changes haven been made. </h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Changes haven't been made. </h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You can add new menu</h1>
                <?php } ?>
            </div>
        </div>
        <!-- Form -->
        <form action="new_menu.php" method="post">
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Menu Name:</label>
                    <input class="form-control" type="text" name="menu_name" placeholder="Menu Name">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Menu Link:</label>
                    <input class="form-control" type="text" name="menu_url" value="http://">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <input class="btn btn-success" type="submit" name="save_menu" value="New Menu">
                </div>
            </div>
        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include'footer.php'; ?>
