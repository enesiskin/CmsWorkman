<!--==============================footer=================================-->
<footer>
    <div class="main">
        <div class="footer-bg">
            <?php echo $row_config['config_footer']; ?>
            <ul class="list-services">
                <li><a class="tooltips" target="_blank" href="<?php echo $row_config['config_face']; ?>"></a></li>
                <li class="item-1"><a target="_blank" class="tooltips" href="<?php echo $row_config['config_twit']; ?>"></a></li>
                <li class="item-2"><a target="_blank" class="tooltips" href="https://www.linkedin.com/"></a></li>
            </ul>
        </div>
    </div>
</footer>
<script>Cufon.now();</script>
<script>
    $(window).load(function () {
        $('.slider')._TMS({
            duration: 800,
            easing: 'easeOutQuart',
            preset: 'simpleFade',
            slideshow: 7000,
            banners: false,
            pauseOnHover: true,
            waitBannerAnimation: false,
            prevBu: '.prev',
            nextBu: '.next'
        });
    });
</script>
</body>
</html>
