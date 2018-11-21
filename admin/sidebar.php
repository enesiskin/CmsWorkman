

<!-- /. Sidebar  -->
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        <?php echo $_SESSION['admin_username']; ?>
                        <br />
                        <small><?php
                                $admin_date = $_SESSION['admin_username'];
                                $date = mysqli_query($conn, "SELECT * FROM admin WHERE admin_username = '$admin_date' ");
                                if($row_date= mysqli_fetch_assoc($date)){
                                    echo $row_date['last_date'];
                                }

                            ?> </small>
                    </div>
                </div>

            </li>
            <li>
                <a class="#" href="index.php"><i class="fa fa-dashboard "></i>Home Page</a>
            </li>
            <li>
                <a class="#" href="menu.php"><i class="fa fa-navicon"></i>Menu</a>
            </li>
            <li>
                <a class="#" href="slider.php"><i class="fa fa-sliders"></i>Slider Menu</a>
            </li>
            <li>
                <a class="#" href="pages.php"><i class="fa fa-cogs "></i>Pages</a>
            </li>
            <li>
                <a class="#" href="servicesa.php"><i class="fa fa-cogs "></i>Services</a>
            </li>

            <?php
                $admin = $_SESSION['admin_username'];
                $admin_run = mysqli_query($conn,"SELECT * FROM admin WHERE admin_username = '$admin'");
                $row_admin = mysqli_fetch_assoc($admin_run);

            if($row_admin['admin_role']=="1"){ ?>
                <li>
                <a class="#" href="settings.php"><i class="fa fa-cogs "></i>Settings</a>
            </li>
            <?php }   ?>




    </div>

</nav>
<!-- /. NAV SIDE  -->