<?php
  include 'header.php';
?>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
        <!-- PAGINATION -->

        <?php

         $pagination = 2;
         $run_pagination = mysqli_query($conn,"SELECT * FROM services");
         $all_services = mysqli_num_rows($run_pagination);

         $all_pagination = ceil($all_services/$pagination);

         $pagin= isset($_GET['pagin']) ? (int) $_GET['pagin']:1;

         if($pagin < 1)$pagin = 1;

         if($pagin > $all_pagination) $pagin = $all_pagination;

         $limit = ($pagin -1)* $pagination;



        $run_services = mysqli_query($conn,"SELECT * FROM services ORDER BY services_name LIMIT $limit,$pagination");
        while($row_services=mysqli_fetch_assoc($run_services)){?>

          <div class="indent-left">
            <h3 class="prev-indent-bot">Our Services</h3>
            <div class="wrapper prev-indent-bot">
              <figure class="img-indent"><img width="200px;" height="200px;" src="admin/<?php echo $row_services['services_path']; ?>" alt=""></figure>
              <div class="extra-wrap">
                <h6 class="prev-indent-bot"><?php echo $row_services['services_name']; ?> </h6>
                 <?php echo substr($row_services['services_detail'],0,250); ?>...</div>
            </div>

            <a style="float:right; " class="button-2" href="<?=seo($row_services['services_name']).'-'.$row_services['services_id'];?>">Read More</a> </div>
            <br>
            <br>
        <hr>


        <?php } ?> <!-- WHILE END -->

        <!--<PAGINATION -->
        <div align="right" class="col-md-12">
        <?php
            $p=0;
            while($p < $all_pagination){
            $p++; ?>

            <a href="services.php?pagin=<?php echo $p;?>"><?php echo $p; ?></a>-

           <?php } ?>
           </div>
        </article>
        <!-- Right Side -->

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