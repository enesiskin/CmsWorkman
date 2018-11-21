<?php include 'header.php';
include 'sidebar.php';


    $run_page = mysqli_query($conn, "SELECT * FROM pages WHERE page_id = '".$_GET['page_id']."' ");
    $row_page = mysqli_fetch_assoc($run_page);


if(isset($_POST['edit_page'])){
    $page_id = $_POST['page_id'];
    $date= date('Y:m:d H:i');
    $run_page = mysqli_query($conn, "UPDATE pages SET page_name = '".$_POST['page_name']."', page_content='".$_POST['page_content']."', page_no = '".$_POST['page_no']."',page_home='".$_POST['page_home']."',page_date ='".$date."' WHERE page_id='".$page_id."' ");

    if(mysqli_affected_rows($conn)){
        header("Location: edit_page.php?case=ok&page_id=$page_id");
        die();

    }else{
        header("Location: edit_page.php?case=no&page_id=$page_id");
        die();
    }
}
?>

?>

<head>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"> </script>
</head>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Edit Page</h1>

                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">Changes haven been made. </h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Changes haven't been made. </h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You can add edit page</h1>
                <?php } ?>
            </div>
        </div>

        <!-- Form -->

        <form action="edit_page.php" method="post">
            <input type="hidden" name="page_id" value="<?php echo $row_page['page_id'];?>">
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Page Name:</label>
                    <input class="form-control" type="text" name="page_name" value="<?php echo $row_page['page_name'];?>">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-12">
                    <label>Page Content:</label>
                    <textarea name="page_content" class="ckeditor"><?php echo ucfirst($row_page['page_content']);?></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Page Number:</label>
                    <input class="form-control" type="text" name="page_no" value="<?php echo $row_page['page_no'];?>" >
                </div>
            </div>
            <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Do you want show this page on homepage ?</label>
                <select name="page_home" class="form-control">
                    <?php if($row_page['page_home']==0) {?>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                    <?php }elseif($row_page['page_home']==1){?>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                    <?php } ?>
                </select>
            </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <input class="btn btn-success" type="submit" name="edit_page" value="Edit Page">
                </div>
            </div>
        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include'footer.php'; ?>
