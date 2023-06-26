<?php $pageTitle = 'Home'; 

?>



<!DOCTYPE php>
<php lang="en">

    <head>
        <?php include 'header.php'; ?>
    </head>

    <body>


        <div class="backgr">
            <header class="header">

                <a href="/msrobot.tech.PHP/home.php">
                    <img id="logo-item" src="assets/img/Logo.png" alt="Ảnh Logo" class="logo">
                </a>
                <nav id="nav">
                    <ul class="item-header">
                        <li id="home"><a href="home.php" class="active">Home</a></li>
                        <li id="tutorial"><a href="tutorials.php">Tutorial</a></li>
                        <li id="forum"><a href="forum.php">Forum</a></li>
                        <li id="blog"><a href="blogs.php">Blog</a></li>

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
                    <!-- <div class="btn-header">
                        <button class="btn" id="btn-header_login">Login</button>
                        <button class="btn" id="btn-header_signUp">Sign up</button>
                    </div>

                    <div class="account" style="display: none;">
                        <img src="assets/img/blog_img/Rectangle_2.png" alt="ảnh đại diện">
                        <div class="account_name">
                            <h3 id="account_name">John.morgan@gmail.com</h3>
                            <span>Logout</span>
                        </div>
                    </div> -->

                    <!-- <div class="btn-header">
                    <button class="btn" id="btn-header_login">Login</button>
                    <button class="btn" id="btn-header_signUp">Sign up</button>
                </div> -->

                </nav>
            </header>

            <main id="main">

                <!-- title -->
                <h1 id="title-main">
                    <strong>MS.Robot </strong>stands top ranked platform for learning
                    <strong>Selenium Test Automation</strong>
                </h1>
                <!-- feedback -->
                <div class="feedback">
                    <div class="feddback-item">

                        <img src="/msrobot.tech.PHP/assets/img/hero-img.png" alt="" id="feedback-img">

                        <div class="feedback-content">
                            <span id="content">Why Choose MS.Robot Over All Automation Training Websites?</span>
                            <p>Unlike other training websites,
                                MS.Robot provides free training tutorials but as an added benefit,
                                you will have full access to all our source code,
                                framework and full Q&A support provided by our professional test
                                automation architecture team.
                            </p>
                            <strong>Start your learning journey NOW!!!</strong>
                            <ul class="list-content">
                                <li id="list-content"><i class='bx bx-right-arrow-alt'></i>Sign up to get our FREE
                                    SELENIUM
                                    TEST AUTOMATION Code.</li>
                                <li id="list-content"><i class='bx bx-right-arrow-alt'></i>Sign up to join in Q&A forum
                                    with
                                    our TEST AUTOMATION ARCHITECT team.</li>
                                <li id="list-content"><i class='bx bx-right-arrow-alt'></i>Sign up to receive Selenium
                                    Tips
                                    & ebooks.</li>
                            </ul>
                            <div class="feedback-email">
                                <input type="text" id="feedback-input" placeholder="Enter your email">
                                <button id="feedback-btn">Sign Up</button>
                            </div>
                        </div>

                        <img src="/msrobot.tech.PHP/assets/img/feedback-icon.png" alt="feedback-icon"
                            id="feedback-icon">

                    </div>
                </div>
                <!-- Container -->
                <div class="container">
                    <span id="title-container">Automation Tools Tutorial</span>
                    <div class="box-container">
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item_1.png" alt="">
                            <p id="content-container">Selenium basic</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item_2.png" alt="">
                            <p id="content-container">Selenium advance</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item3.png" alt="">
                            <p id="content-container">Java basic</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item4.png" alt="">
                            <p id="content-container">Java advance</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item5.png" alt="">
                            <p id="content-container">Selenium Automation frameworks</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item6.png" alt="">
                            <p id="content-container">Locators for Selenium automation</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item7.png" alt="">
                            <p id="content-container">Handling Data in Selenium Automation</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item8.png" alt="">
                            <p id="content-container">Reports for Selenium Automation</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item9.png" alt="">
                            <p id="content-container">Running Selenium Automation(multiple browsers, platforms,
                                environments)</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item10.png" alt="">
                            <p id="content-container">Jenkins build & Jenkins pipeline for Selenium Automation</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item11.png" alt="">
                            <p id="content-container">Maven</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item12.png" alt="">
                            <p id="content-container">TestNG</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item13.png" alt="">
                            <p id="content-container">Log4j</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item14.png" alt="">
                            <p id="content-container">Git</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item15.png" alt="">
                            <p id="content-container">Github</p>
                        </div>
                        <div class="item-container">
                            <img id="img-container" src="/msrobot.tech.PHP/assets/img/item16.png" alt="">
                            <p id="content-container">Docker for Selenium</p>
                        </div>

                    </div>
                </div>

                <!-- main - contend -->

                <div class="main-content">
                    <div class="header-main">

                        <div class="source_code">
                            <span id=source_code>Source code</span>
                            <img src="/msrobot.tech.PHP/assets/img/macbook.png" alt="Ảnh macbook">
                        </div>

                        <div class="box_code">
                            <div class="box_main">

                                <span id="box-main_title">SELENIUM TEST AUTOMATION </span>
                                <p class="free">Free</p>
                                <hr>
                                <p class="title_list">This source code package includes:</p>

                                <div class="box-list">

                                    <div class="box-item_list">
                                        <img id="img-list" src="/msrobot.tech.PHP/assets/img/icon_list1.png"
                                            alt="Icon list">
                                        <p id="title-list">Test Automation Framework for Selenium</p>
                                    </div>
                                    <div class="box-item_list">
                                        <img id="img-list" src="/msrobot.tech.PHP/assets/img/icon_list1.png"
                                            alt="Icon list">
                                        <p id="title-list">4 Test Cases from MS Robot Demo Sites</p>
                                    </div>
                                    <div class="box-item_list">
                                        <img id="img-list" src="/msrobot.tech.PHP/assets/img/icon_list1.png"
                                            alt="Icon list">
                                        <p id="title-list">3 Test Cases from Amazon Web Site</p>
                                    </div>
                                    <div class="box-item_list">
                                        <img id="img-list" src="/msrobot.tech.PHP/assets/img/icon_list1.png"
                                            alt="Icon list">
                                        <p id="title-list">Javadoc for Source Code</p>
                                    </div>
                                    <div class="box-item_list">
                                        <img id="img-list" src="/msrobot.tech.PHP/assets/img/icon_list1.png"
                                            alt="Icon list">
                                        <p id="title-list">User Guide</p>
                                    </div>

                                </div>
                                <button class="btn-list">Download now</button>

                            </div>

                        </div>
                    </div>



                </div>


                <div class="main-item">
                    <div class="main-item_box">

                        <!-- box 1 -->
                        <div class="item_box">
                            <img src="/msrobot.tech.PHP/assets/img/Group.png" alt="">
                            <h3 id="box_title">Learning path for absolute beginner in programming : FREE</h3>
                            <ul>
                                <li class="item_title">
                                    <span> <strong>Step 1:</strong>
                                        Run our SELENIUM TEST AUTOMATION to know what selenium automation
                                        is.</span><br>
                                    <a id="download" href="#">Download Selenium Test Automation now ></a>
                                </li>
                                <li class="item_title">
                                    <span> <strong>Step 2:</strong> Learn Java Advance.</span>
                                </li>
                                <li class="item_title">
                                    <span><strong>Step 3:</strong> Start Selenium Basic.</span>
                                </li>
                                <li class="item_title">
                                    <span><strong>Step 4:</strong> Learn Selenium Advance.</span>
                                </li>
                                <li class="item_title">
                                    <span><strong>Step 5:</strong> Automate Test cases by yourself (Using our Demo
                                        Sites &
                                        Test cases excel file).</span>
                                </li>
                                <li class="item_title">
                                    <span> <strong>Step 6:</strong> Put your automation test cases into github.</span>
                                </li>
                                <li class="item_title">
                                    <span><strong>Step 7:</strong> Put your automation test cases into github.</span>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 8:</strong> Apply for QA Analyst, QA Engineer, Software Developer
                                        in
                                        Test job.</span>
                                </li>
                            </ul>
                        </div>

                        <!-- box 2 -->
                        <div class="item_box">
                            <img src="/msrobot.tech.PHP/assets/img/Group.png" alt="">
                            <h3 id="box_title">Learning path for absolute beginner in programming : FREE</h3>
                            <ul>
                                <li class="item_title">
                                    <span> <strong>Step 1:</strong>
                                        Run our SELENIUM TEST AUTOMATION to know what selenium automation
                                        is.</span><br>
                                    <a id="download" href="#">Download Selenium Test Automation now ></a>
                                </li>
                                <li class="item_title">
                                    <span> <strong>Step 2:</strong> Start Selenium Basic.</span>
                                </li>
                                <li class="item_title">
                                    <span> <strong>Step 3:</strong> Start Selenium Basic.</span>
                                </li>
                                <li class="item_title">
                                    <span> <strong>Step 4:</strong> Automate Test cases by yourself (Using our Demo
                                        Sites &
                                        Test cases excel file).</span>
                                </li>
                                <li class="item_title">
                                    <span> <strong>Step 5:</strong> Put your automation test cases into github.</span>
                                </li>
                                <li class="item_title">
                                    <span> <strong>Step 6:</strong> Apply for QA Analyst, QA Engineer, Software
                                        Developer in
                                        Test job.</span>
                                </li>

                            </ul>
                        </div>

                        <!-- box 3 -->
                        <div class="item_box">
                            <img src="/msrobot.tech.PHP/assets/img/Group.png" alt="">
                            <h3 id="box_title">Learning path for absolute beginner in programming : FREE</h3>
                            <ul>
                                <li class="item_title">
                                    <span><strong>Step 1:</strong>
                                        Run our SELENIUM TEST AUTOMATION to know what selenium automation
                                        is.</span><br>
                                    <a id="download" href="#">Download Selenium Test Automation now ></a>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 2:</strong> Understand Selenium Automation Framework.</span>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 3:</strong> Create Framework to run cross Chrome, Firefox, IE,
                                        Safari. </span>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 4:</strong> Create Framework to run in multiple platforms
                                        (windows,
                                        mac os, IOS, Android).</span>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 5:</strong> Create Framework to run in multiple
                                        environments.</span>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 6:</strong> Create Framework to report automation steps.</span>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 7:</strong> Create Framework to run tests in parallel. </span>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 8:</strong> Create Framework with page object model.</span>
                                </li>
                                <li class="item_title">
                                    <span>
                                        <strong>Step 8:</strong> Create Framework for BDD.</span>
                                </li>
                            </ul>

                        </div>
                        <img id="img_box" src="/msrobot.tech.PHP/assets/img/pp.png" alt="">

                    </div>

                    <div class="main-item_content">
                        <div class="item_content-1">
                            <span id="span_"> <strong id="strong_">Understanding</strong> how to learn Selenium
                                effectively</span>
                            <ul>
                                <li id="item_content">1. How did I learn Selenium when I have a full-time job.</li>
                                <li id="item_content">2. How to learn All Selenium Automation With less than $100. </li>
                                <li id="item_content">3. Break the secret of learning programming for absolute beginner.
                                </li>
                                <li id="item_content">4. Learn Selenium Automation in class vs online.</li>
                                <li id="item_content">5. QA Analyst salary vs Test Automation Developer/Engineer salary.
                                </li>
                                <li id="item_content">6. Help! I can’t learn Selenium, I don’t understand it!</li>
                                <li id="item_content">7. Can’t create Selenium Automation Framework from scratch! You’re
                                    not
                                    alone!</li>
                                <li id="item_content">8. How to lea
                                    .box-contentrn Selenium or any skills for QA Engineer career.</li>
                                <li id="item_content">9. The fastest way to learn Selenium in java language.</li>
                            </ul>
                        </div>
                        <div class="item_content-2">
                            <span id="span_"> <strong id="strong_">Understanding</strong> why learn Selenium
                                Automation</span>
                            <div class="box_content-2">
                                <p>If you ask a tester what she wants to learn next, chances are very high that the
                                    answer
                                    is:
                                    Test Automation with Selenium WebDriver!
                                    Most testers agree that manual testing skills are no longer sufficient for a
                                    successful
                                    career.
                                    Companies still need testers but hire the ones proficient also with programming.
                                    Between a tester that can test a user story and another that can also automate it,
                                    the
                                    second one has the higher chance of getting the job.
                                </p>
                                <br>
                                <p>
                                    She adds value to the company now with her testing.
                                    She also adds value to the company in the future through her automation.
                                    Her automated tests can be repeated any time they are needed.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="main-item-bottom">

                        <div class="item-bottom_title">
                            <img src="/msrobot.tech.PHP/assets/img/clock.png" alt="clock">
                            <h3>Online learning advantage</h3>
                        </div>

                        <div class="item-bottom">
                            <!-- item1 -->
                            <div class="item-bottom_box">
                                <img src="/msrobot.tech.PHP/assets/img/Support.png" alt="" class="box-img">
                                <div class="box-content">
                                    <span>LEARN IN YOUR OWN TIME</span>
                                    <p>
                                        We are very busy in this world and in the software industry,
                                        you need to learn & update your skills set so that you can get a job easily.
                                        Online learning is the best tool to help you achieve the skills you need in you
                                        own
                                        time
                                    </p>
                                </div>
                            </div>
                            <!-- item 2 -->
                            <div class="item-bottom_box">
                                <img src="/msrobot.tech.PHP/assets/img/Support.png" alt="" class="box-img">
                                <div class="box-content">
                                    <span>24/7 RESOURCES ACCESS</span>
                                    <p>
                                        There is no limited time for using resources online.
                                        You take your time to understand deeply & correctly. Programming with Selenium
                                        requires time to understand, practice.
                                        Ability to learn online will give you unlimited time instead of feeling lost in
                                        the
                                        class and have no time to stop and read again.
                                    </p>
                                </div>
                            </div>
                            <!-- item 3 -->
                            <div class="item-bottom_box">
                                <img src="/msrobot.tech.PHP/assets/img/Support.png" alt="" class="box-img">
                                <div class="box-content">
                                    <span>SIGNIFICANCE OF LEARNING SELENIUM</span>
                                    <p>
                                        If you are looking for a software tester job,
                                        chance is the job will require you know test automation & selenium.
                                        Having Selenium Webdriver skill set will give you a peace of mind whenever
                                        you apply for Software tester job.
                                    </p>
                                </div>
                            </div>
                            <!-- item 4 -->
                            <div class="item-bottom_box">
                                <img src="/msrobot.tech.PHP/assets/img/Support.png" alt="" class="box-img">
                                <div class="box-content">
                                    <span>SAVE $$$</span>
                                    <p>
                                        The cost of online class or classic class is a lot and require your time.
                                        When you learn using resources from the internet, it costs less.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </main>

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

        <div class="fb_icon">
            <div class="container_feedback">

                <div class="title_feedback">
                    <span>Your feedback!</span>
                    <a id="btn_fb" class='bx bx-x'></a>
                </div>

                <div class="main_feedback">
                    <div class="feel_feedback">
                        <span>How do you feel about our website?</span>

                        <div id="img_icon_1">
                            <div class="container_icon">
                                <img src="/msrobot.tech.PHP/assets/img/angry1_1.png" alt="Sad" class="feedback-img"
                                    value="1">
                                <img src="/msrobot.tech.PHP/assets/img/angry1.png" alt="Sad" class="feedback-img_2"
                                    value="1">
                                <span class="title_icon">Bad</span>
                            </div>
                            <div class="container_icon">
                                <img src="/msrobot.tech.PHP/assets/img/angry2_2.png" alt="Sad" class="feedback-img"
                                    value="2">
                                <img src="/msrobot.tech.PHP/assets/img/angry2.png" alt="Sad" class="feedback-img_2"
                                    value="2">
                                <span class="title_icon">Rather</span>
                            </div>
                            <div class="container_icon">
                                <img src="/msrobot.tech.PHP/assets/img/angry3_3.png" alt="Sad" class="feedback-img"
                                    value="3">
                                <img src="/msrobot.tech.PHP/assets/img/angry3.png" alt="Sad" class="feedback-img_2"
                                    value="3">
                                <span class="title_icon">Good</span>
                            </div>

                            <div class="container_icon">
                                <img src="/msrobot.tech.PHP/assets/img/angry4_4.png" alt="Sad" class="feedback-img"
                                    value="4">
                                <img src="/msrobot.tech.PHP/assets/img/angry4.png" alt="Sad" class="feedback-img_2"
                                    value="4">
                                <span class="title_icon selected">Very good</span>
                            </div>
                            <div class="container_icon">

                                <img src="/msrobot.tech.PHP/assets/img/angry5_5.png" alt="Sad" class="feedback-img"
                                    value="5">
                                <img src="/msrobot.tech.PHP/assets/img/angry5.png" alt="Sad" class="feedback-img_2"
                                    value="5">
                                <span class="title_icon">Excellent</span>
                            </div>

                        </div>


                        <!-- <div id="img_icon_2">
                        <img src="/msrobot.tech.PHP/assets/img/angry1.png" alt="Sad" class="feedback-img" value="1">
                        <img src="/msrobot.tech.PHP/assets/img/angry2.png" alt="Sad" class="feedback-img" value="2">
                        <img src="/msrobot.tech.PHP/assets/img/angry3.png" alt="Sad" class="feedback-img" value="3">
                        <img src="/msrobot.tech.PHP/assets/img/angry4.png" alt="Sad" class="feedback-img" value="4">
                        <img src="/msrobot.tech.PHP/assets/img/angry5.png" alt="Sad" class="feedback-img" value="5">

                    </div> -->
                    </div>

                    <span id="fb_title">How like are you to recommend our company/product/service to your friends and
                        colleagues?</span>

                    <div class="number_fb">

                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="radio" value="1">
                                <span class="radio-text">1</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="2">
                                <span class="radio-text">2</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="3">
                                <span class="radio-text">3</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="4">
                                <span class="radio-text">4</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="5">
                                <span class="radio-text">5</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="6">
                                <span class="radio-text">6</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="7">
                                <span class="radio-text">7</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="8">
                                <span class="radio-text">8</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="9">
                                <span class="radio-text">9</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="radio" value="10">
                                <span class="radio-text">10</span>
                            </label>
                        </div>
                        <div class="radio_title">
                            <span>not at all</span>
                            <span>very likely</span>
                        </div>
                    </div>

                    <div class="comment">
                        <span>Tell us what you like about our website</span>
                        <input type="text" placeholder="The great experience">
                        <button id="btn_feedback">Submit</button>
                    </div>

                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </body>

</php>