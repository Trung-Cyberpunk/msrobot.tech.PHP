<?php $pageTitle = 'Ecommerce';?>
<!DOCTYPE php>
<php lang="en">

    <head>
        <?php 
            include 'header.php'; 
            include 'product.php';                    
        ?>
    </head>

    <body>
        <div class="backgr">

            <!-- HEADER -->
            <header class="header">

                <a href="/msrobot.tech.PHP/home.php">
                    <img id="logo-item" src="assets/img/Logo.png" alt="Ảnh Logo" class="logo">
                </a>
                <nav id="nav">
                    <ul class="item-header">
                        <li id="home"><a href="home.php">Home</a></li>
                        <li id="tutorial"><a href="tutorials.php">Tutorial</a></li>
                        <li id="forum"><a href="forum.php">Forum</a></li>
                        <li id="blog"><a href="blogs.php">Blog</a></li>
                        <li id="demo_sites">
                            <?php
                        if(isset($_COOKIE['user'])){
                            echo '<a id="header_down" href="#" style="width: 6rem"class="active">Demo Sites</a>
                            <ul class="header_insite">
                                <li id="item-header_insite"><a href="basic_site.php">Basic Site</a></li>
                                <li id="item-header_insite"><a href="automation_practice_site.php">Automation
                                        Practice Site</a></li>
                                <li id="item-header_insite"><a href="automation_actions_site.php">Automation
                                        Actions
                                        Site</a></li>
                                <li id="item-header_insite"><a href="ecommerce_site.php">Ecommerce Site</a></li>
                            </ul>';
                        }else{
                            echo '<a id="header_down" href="#" style="width: 6rem">Demo Sites</a>
                            <ul class="header_insite">
                                <li id="item-header_insite"><a href="basic_site_login.php">Basic Site</a></li>
                                <li id="item-header_insite"><a href="automation_practice_site_login.php">Automation
                                        Practice Site</a></li>
                                <li id="item-header_insite"><a href="automation_actions_site_login.php">Automation
                                        Actions
                                        Site</a></li>
                                <li id="item-header_insite"><a href="ecommerce_site_login.php">Ecommerce Site</a></li>
                            </ul>';
                        }
                        ?>
                        </li>
                    </ul>
                    <img id="img-header" src="/msrobot.tech.PHP/assets/img/canada_tpl.png" alt="">
                    <!-- đăng nhập -->
                    <?php
                    
                    // Kiểm tra xem cookie có tồn tại hay không
                    if (isset($_COOKIE['user'])) {
                        // Lấy giá trị của cookie email
                        $email = $_COOKIE['user'];
                        // Hiển thị khối account với tên email và nút logout

                        // Xử lý logout
                        
                        echo '
                            <div class="account">
                                <img src="assets/img/blog_img/Rectangle_2.png" alt="ảnh đại diện">
                                <div class="account_name">
                                    <h3 id="account_name">'      . $email . '</h3>
                                    <form method="post">
                                        <button id = "btn_logout" type="submit" name="logout" 
                                        style="
                                                border: none;
                                                background-color: var(--bg-color);
                                                font-size: 1.3rem;
                                                font-family: 500;
                                                color: var(--item-color);
                                                cursor: pointer;
                                                transition: all ease-in-out 0.2s;
                                            ">
                                            Logout
                                            </button>
                                    </form>
                                </div>
                            </div>';
                    } else {
                        // Hiển thị khối btn với nút Login và Sign up
                        echo '
                            <div class="btn-header">
                                <button class="btn" id="btn-header_login">Login</button>
                                <button class="btn" id="btn-header_signUp">Sign up</button>
                            </div>';
                    }

                    
                    ?>

                    <!-- <div class="btn-header">
                        <button class="btn" id="btn-header_login">Login</button>
                        <button class="btn" id="btn-header_signUp">Sign up</button>
                    </div> -->

                </nav>
            </header>

            <div class="title_box">
                <h1>ECOMMERCE SITE</h1>
            </div>

            <div class="ecommerce_site">
                <!-- Phone -->

                <div class="container_phone">

                    <!-- Xử lý ajax file js và fetch_data.php -->

                </div>

                <!-- search_phone -->



                <div class="search_phone">
                    <!-- Box tìm kiếm -->

                    <form class="search_box" method="post" action="">
                        <input type="text" placeholder="Search" class="datasearch">
                        <button type="submit" class="bx bx-search" name="btn_search"></button>
                    </form>

                    <div class="categories">
                        <h3 class="title_categories">Categories</h3>
                        <div class="item_categories">
                            <ul>
                                <li>
                                    <a href="">
                                        <span class="item_phone">All</span>
                                        <span class="count">(15)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="item_phone">Apple</span>
                                        <span class="count">(05)</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="">
                                        <span class="item_phone">Samsumg</span>
                                        <span class="count">(05)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="item_phone">Xiaomi</span>
                                        <span class="count">(05)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="item_phone">Others</span>
                                        <span class="count">(05)</span>
                                    </a>
                                </li>
                            </ul>


                        </div>
                    </div>

                    <div class="filter-by-price">
                        <h3>Filter by Price</h3>
                        <!-- <div id="fliter_price" class="fliter_price">
                        <div id="handle1" class="handle"></div>
                        <div id="handle2" class="handle"></div>
                    </div>
                    <div class="value_price">
                        <h4>Price: </h4>
                        <span id="value_1">$0</span>
                        <span>-</span>
                        <span id="value_2">$1900</span>
                    </div> -->

                        <!-- Thanh gia -->
                    </div>
                    <div id="slider-range"></div>
                    <p>
                        <label for="amount">Price:</label>
                        <input type="text" id="amount" readonly style="border:0; font-weight:bold;">
                    </p>

                    <div class="popular">
                        <h3>Popular Products</h3>



                        <div class="popular_item">
                            <img src="assets/img/phone/7pls.png" alt="">
                            <div class="popular_phone">
                                <h4>Iphone 7 Plus</h4>
                                <br>
                                <span style="color:rgba(75, 145, 249, 1)">$159</span>
                            </div>
                        </div>


                        <!--  -->
                        <div class="popular_item">
                            <img src="assets/img/phone/xr.png" alt="">
                            <div class="popular_phone">
                                <h4>Iphone XR</h4>
                                <br>
                                <span style="color:rgba(75, 145, 249, 1)">$159</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class="popular_item">
                            <img src="assets/img/phone/s9pls.png" alt="">
                            <div class="popular_phone">
                                <h4>Samsumg S9 Plus</h4>
                                <br>
                                <span style="color:rgba(75, 145, 249, 1)">$159</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- FOOTER -->
            <footer id="footer">
                <div class="footer-top">
                    <div class="tutorial btm">
                        <h3>TUTORIAL</h3>
                        <hr>
                        <div class="footer-1">
                            <ul>
                                <li class="footer-item">Java</li>
                                <li class="footer-item">Selenium(java)</li>
                                <li class="footer-item">Selenium Automation Framework</li>
                                <li class="footer-item">Docker for Selenium</li>
                                <li class="footer-item">TestNG</li>
                            </ul>

                            <ul>
                                <li class="footer-item">Jenkis</li>
                                <li class="footer-item">Git</li>
                                <li class="footer-item">Github</li>
                                <li class="footer-item">Maven</li>
                                <li class="footer-item">Log4j</li>
                            </ul>
                        </div>
                    </div>

                    <div class="demo_sites btm">
                        <h3>DEMO SITES</h3>
                        <hr>
                        <ul>
                            <li class="footer-item">Basic Demo Site</li>
                            <li class="footer-item">Automation Practice Site</li>
                            <li class="footer-item">Automation Action Site</li>
                            <li class="footer-item">E-commerce Demo Site</li>
                        </ul>
                    </div>

                    <div class="useful_links btm">
                        <h3>DEMO SITES</h3>
                        <hr>
                        <ul>
                            <li class="footer-item">Blog</li>
                            <li class="footer-item">Forum</li>
                            <li class="footer-item">Contact us</li>
                        </ul>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="footer-box">
                        <span>&copy; 2020 MS.Robot Corp.</span>
                        <div class="icon-btm">
                            <a href="#" class="tw"><img src="/msrobot.tech.PHP/assets/img/twitter.png" alt=""></a>
                            <a href="#" class="fb"><img src="/msrobot.tech.PHP/assets/img/facebook.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>


        <?php include 'footer.php'; ?>

    </body>

</php>