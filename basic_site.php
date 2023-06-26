<?php $pageTitle = 'Basic site';?>
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
                            echo '<a id="header_down" href="#" style="width: 6rem" class="active">Demo Sites</a>
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
                <h1>BASIC SITE</h1>
            </div>

            <div class="basic_site">
                <div class="box_city">
                    <div class="btn_city">
                        <button class="btn-ct">City 1</button>
                        <button class="btn-ct click">City 2</button>
                        <button class="btn-ct">City 3</button>
                        <button class="btn-ct">City 4</button>
                    </div>
                    <div class="content_city">
                        <div class="content_box ">
                            <p>
                                Description 1 <br> <br>
                                Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed
                                platea vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum
                                sociosqu mi placerat. Neque dictum quis.
                                <br> <br>
                                A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in
                                tortor dapibus rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum,
                                imperdiet, viverra. Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.
                                <br> <br>
                                Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames.
                                Nostra sodales ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis
                                potenti condimentum convallis sollicitudin. Nibh aliquet.
                            </p>
                        </div>
                        <div class="content_box content_block">
                            <p>
                                Description 2 <br> <br>
                                Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed
                                platea vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum
                                sociosqu mi placerat. Neque dictum quis.
                                <br> <br>
                                A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in
                                tortor dapibus rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum,
                                imperdiet, viverra. Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.
                                <br> <br>
                                Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames.
                                Nostra sodales ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis
                                potenti condimentum convallis sollicitudin. Nibh aliquet.
                            </p>
                        </div>
                        <div class="content_box">
                            <p>
                                Description 3 <br> <br>
                                Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed
                                platea vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum
                                sociosqu mi placerat. Neque dictum quis.
                                <br> <br>
                                A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in
                                tortor dapibus rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum,
                                imperdiet, viverra. Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.
                                <br> <br>
                                Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames.
                                Nostra sodales ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis
                                potenti condimentum convallis sollicitudin. Nibh aliquet.
                            </p>
                        </div>
                        <div class="content_box">
                            <p>
                                Description 4 <br> <br>
                                Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed
                                platea vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum
                                sociosqu mi placerat. Neque dictum quis.
                                <br> <br>
                                A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in
                                tortor dapibus rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum,
                                imperdiet, viverra. Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.
                                <br> <br>
                                Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames.
                                Nostra sodales ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis
                                potenti condimentum convallis sollicitudin. Nibh aliquet.
                            </p>
                        </div>
                    </div>

                    <div class="city_img">
                        <div class="city_img-box">
                            <h4>City 1</h4>
                            <img src="/msrobot.tech.PHP/assets/img/city-1.png" alt="">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="city_img-box">
                            <h4>City 2</h4>
                            <img src="/msrobot.tech.PHP/assets/img/city-2.png" alt="">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="city_img-box">
                            <h4>City 3</h4>
                            <img src="/msrobot.tech.PHP/assets/img/city-3.png" alt="">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="city_img-box">
                            <h4>City 4</h4>
                            <img src="/msrobot.tech.PHP/assets/img/city-4.png" alt="">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>

                    <div class="form_rg">
                        <h4>Registration Form</h4>

                        <div class="nameform">
                            <label>Your Name (*)</label>
                            <input type="text" placeholder="FirstName">
                            <input type="text" placeholder="LastName">
                        </div>

                        <div class="marital">
                            <label>Marital Status</label>
                            <label for="male" class="male">
                                <input type="radio" id="male" name="gender" value="male">
                                Single
                            </label>
                            <label for="female" class="female">
                                <input type="radio" id="female" name="gender" value="female">
                                Married
                            </label>
                            <label for="other" class="orther">
                                <input type="radio" id="other" name="gender" value="other">
                                Divorced
                            </label>
                        </div>
                        <div class="hoddy">
                            <label style="font-weight:700; font-size: 1.5rem;">Hoddy</label>
                            <label for="cooking">
                                <input type="checkbox" checked>
                                Cooking
                            </label>
                            <label for="reading">
                                <input type="checkbox" checked>
                                Reading
                            </label>
                            <label for="dancing">
                                <input type="checkbox" checked>
                                Dancing
                            </label>
                            <label for="writing">
                                <input type="checkbox" checked>
                                Writing
                            </label>
                        </div>
                        <div class="country">
                            <label>Country</label>
                            <select id="country-select">
                                <option value="vn">Việt Nam</option>
                                <option value="us">United States</option>
                                <option value="jp">Japan</option>
                                <option value="kr">South Korea</option>
                            </select>
                        </div>

                        <div class="your_email">
                            <label for="email-text">Your Email Address(*)</label>
                            <input type="text" id="email-text">
                        </div>
                        <div class="your_phone">
                            <label for="phone-text">Your Phone Number (*)</label>
                            <input type="text" id="phone-text">
                        </div>

                        <div class="choose_file">
                            <form>
                                <label for="file-upload">Your Profile Picture (required)</label>
                                <input type="file" id="file-upload" name="file-upload" placeholder="Choose File">
                            </form>
                        </div>

                        <div class="box-scroll">
                            <label for="">Selenium Commands</label>
                            <div class="scroll">
                                <p>Browser Commands</p>
                                <p>Navigation Commands</p>
                                <p>Switch Commands</p>
                                <p>Switch Commands</p>
                                <p>Navigation Commands</p>
                                <p>Switch Commands</p>
                                <p>Switch Commands</p>
                            </div>
                        </div>
                        <div class="yourself">
                            <label for="yourself_a">About Yourself</label>
                            <textarea name="" id="yourself_a" cols="30" rows="10" style="resize: none;"></textarea>
                        </div>

                        <button class="btn_">Submit</button>
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