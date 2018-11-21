<?php include'header.php';
include'sidebar.php';

if(@$_GET['deletepage']== "ok"){

    $run_page = mysqli_query($conn, "DELETE FROM pages  WHERE page_id='".$_GET['page_id']."'");

    if(mysqli_affected_rows($conn)){
        header("Location: pages.php?case=ok");
        die();

    }else{
        header("Location: pages.php?case=no");
        die();
    }
}



?>

<!-- İndex Content -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">PAGES</h1>
                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">The change has been approved. </h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Change not confirmed. </h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You have all menu's there. </h1>
                <?php } ?>

            </div>
            <div class="col-md-12">
                <a href="new_page.php"> <button class="btn btn-success">New Page</button></a>
                <hr>
            </div>

            <!-- Table Start -->
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date Time</th>
                                <th style="width: 400px;">Page Name</th>
                                <th>Situation</th>
                                <th style="width: 20px;"></th>
                                <th style="width: 20px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $edit_page= mysqli_query($conn, "SELECT * FROM pages");
                            while($row_page = mysqli_fetch_assoc($edit_page)){?>
                                <tr>
                                    <td><?php echo $row_page['page_id']?></td>
                                    <td><?php echo $row_page['page_date']?></td>
                                    <td><?php echo $row_page['page_name']?></td>
                                    <td><?php
                                        if($row_page['page_home']== 0){
                                            echo "No";

                                        }elseif($row_page['page_home']== 1){
                                            echo "Yes";
                                        }
                                        ?></td>
                                    <td><a href="edit_page.php?page_id=<?php echo $row_page['page_id']?>"><button class="btn btn-warning">Edit</button></a> </td>
                                    <td><a href="pages.php?page_id=<?php echo $row_page['page_id']?>&deletepage=ok"><button class="btn btn-info">Delete</button></a> </td>
                                </tr>
                        <?php }?>
                        </tbody>
                    </table>
                 </div>
               </div>
            </div>
            <!-- /. Table END  -->
        </div>
        <!-- ROW END -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include'footer.php'; ?>
