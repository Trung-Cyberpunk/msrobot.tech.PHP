<?php $pageTitle = 'Login';?>
<!DOCTYPE php>
<php lang="en">
    <?php include 'header.php'; ?>

    <body>

        <div class="backgr">
            <header class="header">

                <a href="/msrobot.tech.PHP/home.php">
                    <img id="logo-item" src="assets/img/Logo.png" alt="Ảnh Logo" class="logo">
                </a>
                <nav id="nav">
                    <ul class="item-header">
                        <li id="home"><a href="#" class="active">Home</a></li>
                        <li id="tutorial"><a href="#">Tutorial</a></li>
                        <li id="forum"><a href="#">Forum</a></li>
                        <li id="blog"><a href="#">Blog</a></li>
                        <li id="demo_sites">

                            <?php
                        if(isset($_COOKIE['user'])){
                            echo '<a id="header_down" href="#" style="width: 6rem">Demo Sites</a>
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
                </nav>
            </header>

            <div class="login_email">
                <div class="sign_title">
                    <h1>SIGN UP</h1>
                </div>
                <div class="email_lg">
                    <form action="sumbit" class="container_lg">
                        <div class="title_lg">
                            <span>Verify your email address</span>
                        </div>
                        <div class="bottom_lg">
                            <p>
                                Before proceeding, please check your email for a verification link.
                                If you did not receive the email,
                                <strong style="color:rgba(7, 68, 242, 1)">
                                    click here to request another.
                                </strong>
                            </p>
                            <button class="btn_email">Ok</button>
                        </div>

                    </form>
                </div>
            </div>


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