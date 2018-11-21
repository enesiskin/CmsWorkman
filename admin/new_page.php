<?php include 'header.php';
include 'sidebar.php';

if(isset($_POST['new_page'])){
    $date= date('Y:m:d H:i');
    $run_page = mysqli_query($conn, "INSERT INTO pages(page_name,page_content,page_no,page_home,page_date) VALUES('".$_POST['page_name']."','".$_POST['page_content']."','".$_POST['page_no']."','".$_POST['page_home']."','".$date."') ");

    if(mysqli_affected_rows($conn)){
           header("Location: new_page.php?case=ok");
            die();

    }else{
        header("Location: new_page.php?case=no");
        die();
    }
}

?>

<head>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"> </script>
</head>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">New Page</h1>

                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">Changes haven been made. </h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Changes haven't been made. </h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You can add new page</h1>
                <?php } ?>
            </div>
        </div>
        <!-- Form -->
        <form action="new_page.php" method="post">
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Page Name:</label>
                    <input class="form-control" type="text" name="page_name" placeholder="Page Name">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group col-md-12">
                    <label>Page Content:</label>
                    <textarea name="page_content" class="ckeditor"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label>Page Number:</label>
                    <input class="form-control" type="text" name="page_no" >
                </div>
            </div>
            <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Do you want show this page on homepage ?</label>
                <select name="page_home" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <input class="btn btn-success" type="submit" name="new_page" value="New Page">
                </div>
            </div>
        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include'footer.php'; ?>
