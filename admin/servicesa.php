<?php include 'header.php';
include 'sidebar.php';

if(@$_GET['delete_services']== "ok"){
    $run_services = mysqli_query($conn,"DELETE  FROM services WHERE services_id = '".$_GET['services_id']."'");

    if(mysqli_affected_rows($conn)){
        header("Location: servicesa.php?case=ok");
        die();

    }else{
        header("Location: servicesa.php?case=no");
        die();
    }
}


?>




<!-- Wrap -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SERVICES</h1>
                <?php if(@$_GET['case']== "ok"){?>
                    <h1 class="page-subhead-line" style="color: green;">The change has been approved. </h1>
                <?php }elseif(@$_GET['case']=="no"){?>
                    <h1 class="page-subhead-line" style="color: red;">Change not confirmed. </h1>
                <?php } else{ ?>
                    <h1 class="page-subhead-line">You have all services there. </h1>
                <?php } ?>
            </div>
            <!-- HEADLINE -->
            <div class="col-md-12">
                <a href="new_services"><button class="btn btn-success">New Services</button></a>
                <hr>
            </div>
            <!-- TABLE START -->
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>#</th>
                            <th>Date Time</th>
                            <th style="width: 300px;">Services Name</th>
                            <th>Services Path</th>
                            <th>Services Hit</th>
                            <th style="width: 10px;"></th>
                            <th style="width: 10px;"></th>
                        </thead>
                        <tbody>
                                <?php
                                    $all_services = mysqli_query($conn, "SELECT * FROM services ");
                                    while($row_services= mysqli_fetch_assoc($all_services)){;?>
                                <tr>
                                <td><?php echo $row_services['services_id']?></td>
                                <td><?php echo $row_services['services_date']?></td>
                                <td><?php echo $row_services['services_name']?></td>
                                <td><img width="100px;" src="<?php echo $row_services['services_path']?>"</td>
                                <td><?php echo $row_services['services_hit']?></td>

                                <td><a href="edit_services?services_id=<?php echo $row_services['services_id']?>"><button class="btn btn-warning">Edit</button></a></td>
                                <td><a href="servicesa.php?services_id=<?php echo $row_services['services_id']?>&delete_services=ok"><button class="btn btn-danger">Delete</button></a></td>
                                </tr> <?php }?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            <!-- TABLE END -->

        </div>
        <!-- Row End -->
    </div>
    <!-- Page End -->
</div>
<!-- Wrapper End -->

<?php include'footer.php'; ?>