<?php
  include 'header.php';

   $services_id = @$_GET['services_id'];
   $run_services = mysqli_query($conn,"SELECT * FROM services WHERE services_id= '$services_id' ");
   $row_services=mysqli_fetch_assoc($run_services);

   $services_hit = $row_services['services_hit'];
   $services_hit++;
   $serviceshit = mysqli_query($conn, "UPDATE services SET services_hit= '".$services_hit."' WHERE services_id= '$services_id'  ");

?>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h3 class="prev-indent-bot"><?php echo $row_services['services_name']; ?></h3>
            <div class="wrapper prev-indent-bot">
              <figure class="img-indent"><img width="300px;" height="300px;" src="admin/<?php echo $row_services['services_path']; ?>" alt=""></figure>
              <div class="extra-wrap">
                <h6 class="prev-indent-bot"> </h6>
                 <?php echo $row_services['services_detail']; ?></div>
            </div>



        <!-- Right Side -->
        </article>
        <article class="col-2">
          <h3 class="p1">Services List</h3>
          <ul class="list-1">
          <?php
            $run_services = mysqli_query($conn,"SELECT * FROM services ORDER BY services_hit DESC limit 10");
            while($row_services=mysqli_fetch_assoc($run_services)){?>

                    <li><a href="view_services.php?services_id=<?php echo $row_services['services_id']; ?>"> <?php echo $row_services['services_name']; ?></a></li>

            <?php } ?>
         </ul>
        </article>
      </div>
    </section>
    <!--==============================aside================================-->
    <aside>

      <div class="block"></div>
    </aside>
  </div>
</div>
<!--==============================footer=================================-->
<?php include 'footer.php';?>