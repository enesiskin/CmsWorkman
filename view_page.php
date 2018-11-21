<?php include'header.php';

$page_id= $_GET['page_id'];
$run_page= mysqli_query($conn, "SELECT * FROM pages WHERE page_id='".$page_id."'");
$row_page = mysqli_fetch_assoc($run_page)?>


<!--==============================content================================-->
<section id="content">
    <div class="wrapper">
        <article class="col-1">
                <div class="indent-left">
                    <h2><?php echo $row_page['page_name'];?></h2>
                </div>
            <div class="box">
                <div class="box-bg maxheight">
                    <div class="padding">
                        <p style="text-indent:50px;"><?php echo $row_page['page_content'];?></p>
                    </div>
        </article>

        <article class="col-2">
            <h3>Testimonials</h3>
            <div class="wrapper indent-bot">
                <figure class="img-indent"><img src="images/page1-img1.jpg" alt=""></figure>
                <div class="extra-wrap text-1">
                    <div class="margin-top">
                        <h6><a class="link color-2" href="#">James Williams</a></h6>
                        Lorem ipsum dolor sitmet consectetur adipisicing elit sed do eiusmod. </div>
                </div>
            </div>

            <div class="wrapper">
                <figure class="img-indent"><img src="images/page1-img2.jpg" alt=""></figure>
                <div class="extra-wrap text-1">
                    <div class="margin-top">
                        <h6><a class="link color-2" href="#">Thomas Seether</a></h6>
                        Tempor incididunt utlabore et dolore magna aliqua ut enim ad minim veniam. </div>
                </div>
            </div>

        </article>
    </div>
<!-- WRAPPER -->
    <div class="block"></div>
</section>
</div>
</div>
<?php include'footer.php'; ?>
