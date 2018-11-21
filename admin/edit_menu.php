<?php include 'header.php';
include 'sidebar.php';

$menu_id = @$_GET['menu_id'];
$run_menu=mysqli_query($conn,"SELECT * FROM menu WHERE menu_id = '$menu_id'");
$row_menu = mysqli_fetch_assoc($run_menu);


if(isset($_POST['edit_menu'])){
    $menu_id = $_POST['menu_id'];
    $run_menu = mysqli_query($conn, "UPDATE menu SET menu_name = '".$_POST['menu_name']."', menu_url='".$_POST['menu_url']."' WHERE menu_id='$menu_id'");

    if(mysqli_affected_rows($conn)){
        header("Location: edit_menu.php?case=ok&menu_id= $menu_id");
        die();

    }else{
        header("Location: edit_menu.php?case=no&menu_id=$menu_id");
        die();
    }
}
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Edit Menu</h1>

                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">The change has been approved. </h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Change not confirmed.</h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You can edit menu.</h1>
                <?php } ?>
            </div>
        </div>
        <!-- Form -->
        <form action="edit_menu.php" method="post">
            <input type="hidden" name="menu_id" value="<?php echo $row_menu['menu_id'];?>">
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Menu Name:</label>
                    <input class="form-control" type="text" name="menu_name" value="<?php echo $row_menu['menu_name'];?>">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Menu Link:</label>
                    <input class="form-control" type="text" name="menu_url" value="<?php echo $row_menu['menu_url'];?>">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <input class="btn btn-success" type="submit" name="edit_menu" value="Edit Menu">
                </div>
            </div>
        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include'footer.php'; ?>
