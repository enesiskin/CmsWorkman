<div class="wrapper">
    <div class="slider">
        <ul class="items">
            <?php
            $run_slider = mysqli_query($conn, "SELECT * FROM slider ORDER BY slider_id ASC ");
            while($row_slider = mysqli_fetch_assoc($run_slider)){;
                ?>

                <li><img src="admin/<?php echo $row_slider['slider_path']?>" alt="<?php echo $row_slider['slider_name']?>"></li>

            <?php } ?>

        </ul>
    </div>
    <a class="prev">prev</a> <a class="next">next</a>
    <div class="banner1-bg"></div>
    <div class="banner-1"></div>
</div>