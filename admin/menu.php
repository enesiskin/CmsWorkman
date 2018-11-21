<?php include'header.php';
include'sidebar.php';

if(@$_GET['menusil']== "ok"){

    $run_menu = mysqli_query($conn, "DELETE FROM menu  WHERE menu_id='".$_GET['menu_id']."'");

    if(mysqli_affected_rows($conn)){
        header("Location: menu.php?case=ok");
        die();

    }else{
        header("Location: menu.php?case=no");
        die();
    }
}



?>

<!-- İndex Content -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">CHANGE MENU BAR</h1>
                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">The change has been approved. </h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Change not confirmed. </h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You have all menu's there. </h1>
                <?php } ?>

            </div>
            <div class="col-md-12">
                <a href="new_menu.php"> <button class="btn btn-success">New Menu</button></a>
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
                                <th>Menu Name</th>
                                <th>Menu Link</th>
                                <th style="width: 20px;"></th>
                                <th style="width: 20px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $edit_menu = mysqli_query($conn, "SELECT * FROM menu");
                            while($row_menu = mysqli_fetch_assoc($edit_menu)){?>
                                <tr>
                                    <td><?php echo $row_menu['menu_id']?></td>
                                    <td><?php echo $row_menu['menu_name']?></td>
                                    <td><?php echo $row_menu['menu_url']?></td>
                                    <td><a href="edit_menu.php?menu_id=<?php echo $row_menu['menu_id']?>"><button class="btn btn-warning">Edit</button></a> </td>
                                    <td><a href="menu.php?menu_id=<?php echo $row_menu['menu_id']?>&menusil=ok"><button class="btn btn-info">Delete</button></a> </td>
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
