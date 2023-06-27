<?php $pageTitle = 'Ecommerce';?>
<!DOCTYPE php>
<php lang="en">

    <head>
        <?php include 'header.php'; ?>
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

            <div class="ecommerce_product">
                <div class="name_product">
                    <a href="ecommerce_site.php" class="color_product" id="itemproduct">Home</a>
                    <span class='bx bx-chevron-right'></span>
                    <a href="#phone" id="itemproduct">Galaxy S8</a>
                </div>
                <div class="information_phone">
                    <img src="assets/img/phone/s8pls.png" alt="Samsumg S8">
                    <div class="item_information">
                        <h2>Galaxy Galaxy S8</h2>
                        <div class="rating">
                            <span class="bx bxs-star"></span>
                            <span class="bx bxs-star"></span>
                            <span class="bx bxs-star"></span>
                            <span class="bx bxs-star"></span>
                            <span class="bx bx-star"></span>
                            <span class="vote">6376</span>
                        </div>
                        <p>
                            The Galaxy S8 expansive display stretches from edge to edge,
                            giving you the most amount of screen in the least amount of space.
                            And the Galaxy S8+ is even more expansive — our biggest screen yet.¹
                        </p>
                        <div class="container_quatity">
                            <h4>Quantity</h4>
                            <div class="quantity">
                                <span class="value">Only 1</span>
                                <div class="up_down-quantity">
                                    <button class="increase bx bxs-up-arrow"></button>
                                    <button class="decrease bx bxs-down-arrow"></button>
                                </div>
                            </div>
                            <h3 id="price_item">$649.99</h3>
                            <button class="add-cart">Add to cart<i class='bx bx-chevron-right'></i></button>
                        </div>
                    </div>
                </div>

                <div class="box_describe">
                    <div class="item_describe">
                        <span id="description">Description</span>
                        <span id="reviews" class="color_describe">Reviews(0)</span>
                    </div>
                    <div id="hr">
                        <div class="triangle"></div>
                    </div>
                    <div class="description">
                        <p>
                            One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the
                            future.
                            The same is true as we experience in emotional sensation of stress from our first instances
                            of social rejection ridicule.
                            We quickly learn to fear and thus automatically avoid potentially stressful situations of
                            all kinds,
                            including the most common of all making mistakes.
                        </p>
                    </div>
                    <div class="reviewss" style="display: none;">
                        <p>
                            There are no reviews yet.
                            <br>
                            Be the first to review “Galaxy Galaxy S8”
                            <br>
                            Your email address will not be published. Required fields are marked *
                        </p>
                        <div class="rating_2">
                            <span>Your Rating</span>
                            <span class="bx bx-star"></span>
                            <span class="bx bx-star"></span>
                            <span class="bx bx-star"></span>
                            <span class="bx bx-star"></span>
                            <span class="bx bx-star"></span>
                        </div>
                        <textarea name="" id="note_rv" placeholder="Your Review*"></textarea>
                        <div class="rv_mail">
                            <input type="text" id="name_rv" placeholder="Name *">
                            <input type="text" id="mail_rv" placeholder="Email *">
                            <button class="btn_rv">Submit</button>
                        </div>
                    </div>
                </div>

                <div class="related_product">
                    <div class="related_item">
                        <h3>Related Product</h3>
                        <div class="btn_related">
                            <button onclick="slidePrev()" class="bx bx-chevron-left"></button>
                            <button onclick="slideNext()" class="bx bx-chevron-right"></button>
                        </div>
                    </div>

                    <div class="box_related">


                        <div class="boxs">
                            <a href="ecommerce_product.php">
                                <img src="assets/img/phone/note9.png" alt="Phone">
                            </a>
                            <h3>Samsumg Galaxy S9</h3>
                            <span id="prices">$139</span>
                        </div>



                        <div class="boxs">
                            <a href="ecommerce_product.php">
                                <img src="assets/img/phone/7pls.png" alt="Phone">
                            </a>
                            <h3>Samsumg Galaxy S9</h3>
                            <span id="prices">$139</span>
                        </div>
                        <div class="boxs">
                            <a href="ecommerce_product.php">
                                <img src="assets/img/phone/mi8.png" alt="Phone">
                            </a>
                            <h3>Samsumg Galaxy S9</h3>
                            <span id="prices">$139</span>
                        </div>
                        <div class="boxs">
                            <a href="ecommerce_product.php">
                                <img src="assets/img/phone/nokia7pls.png" alt="Phone">
                            </a>
                            <h3>Samsumg Galaxy S9</h3>
                            <span id="prices">$139</span>
                        </div>
                        <div class="boxs">
                            <a href="ecommerce_product.php">
                                <img src="assets/img/phone/note9.png" alt="Phone">
                            </a>
                            <h3>Samsumg Galaxy S9</h3>
                            <span id="prices">$139</span>
                        </div>
                        <div class="boxs">
                            <a href="ecommerce_product.php">
                                <img src="assets/img/phone/x.png" alt="Phone">
                            </a>
                            <h3>Samsumg Galaxy S9</h3>
                            <span id="prices">$139</span>
                        </div>
                        <div class="boxs">
                            <a href="ecommerce_product.php">
                                <img src="assets/img/phone/s5pro.png" alt="Phone">
                            </a>
                            <h3>Samsumg Galaxy S9</h3>
                            <span id="prices">$139</span>
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