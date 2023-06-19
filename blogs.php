<?php $pageTitle = 'Blog';?>
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
                    <li id="blog"><a href="blogs.php"class="active">Blog</a></li>
                    <li id="demo_sites" >
                        <a id="header_down" href="#"style="width: 6rem">Demo Sites</a>
                        <ul class="header_insite">
                            <li id="item-header_insite"><a href="basic_site_login.php">Basic Site</a></li>
                            <li id="item-header_insite"><a href="automation_practice_site_login.php">Automation Practice Site</a></li>
                            <li id="item-header_insite"><a href="automation_actions_site_login.php">Automation Actions Site</a></li>
                            <li id="item-header_insite"><a href="ecommerce_site_login.php">Ecommerce Site</a></li>
                        </ul>
                    </li>
                </ul>
                <img id="img-header" src="/msrobot.tech.PHP/assets/img/canada_tpl.png" alt="">

                <div class="btn-header">
                    <button class="btn" id="btn-header_login">Login</button>
                    <button class="btn" id="btn-header_signUp">Sign up</button>
                </div>

                    <!-- <div class="btn-header">
                        <button class="btn" id="btn-header_login">Login</button>
                        <button class="btn" id="btn-header_signUp">Sign up</button>
                    </div> -->
                
            </nav>
        </header>
        
        <div class="title_box">
            <h1>BLOG</h1>
        </div>
    
        <div class="container_blogs">
            <div class="nav_blog">
                <div class="blog_header">
                    <h3>Sign up to get our FREE SELENIUM TEST AUTOMATION Code.</h3>
                    <br>
                    <h3> Sign up to join in Q&A forum with our TEST AUTOMATION ARCHITECT team.</h3>
                    <br>
                    <h3>Sign up to receive Selenium Tips & ebooks.</h3>
                </div>
                <div class="feedback-email">
                    <input type="text" id="feedback-input" placeholder="Enter your email">
                    <button id="feedback-btn">Sign Up</button>
                </div>
            </div>
            
        </div>

        <div class="box_item-blog">

            <!-- item -->
            <div class="blog_content">
                <!-- Blog -->
                <div class="blog-item">
                    <a href="blogs_2.php"><h1>How Did I Learn Selenium When I Have A Full-time Job</h1></a> 
                    <div class="author">
                        <div class="img_author">
                            <img src="assets/img/blog_img/author_1.png" alt="">
                            <span>by <strong>Thao Le</strong></span>
                        </div>
                        <span class="date">23 Dec, 2019</span>
                    </div>
                    <div class="main_blog">
                        <img src="/msrobot.tech.PHP/assets/img/blog_img/Rectangle.png" alt="">
                        <div class="content_blog">
                            <span>
                                Copy
                                In this article I will tell you my experience to 
                                learn Selenium Webdriver and Java programming when I’m
                                working with a full-time job. You will learn:
                            </span>
                            <ul>
                                <li>- How to start your learning journey</li>
                                <li>- How to learn faster in small time</li>
                                <li>- How to learn Java language (and yes, it’s hard!)</li>
                                <li>- How to make sure you can achieve your learning goal Let’s get started.</li>
                            </ul>
                            <span id="letgo">Let's get started</span>
                        </div>
                        <div class="reading">
                            <strong>412</strong>
                            <span>Comment</span>
                            <a href="blogs_2.php"><button class="reading-btn">Continue Reading</button></a> 
                        </div>
                    </div> 
                    <hr> 
                </div>

                <!-- Blog -->
                <div class="blog-item">
                    <h1>Can't Create Selenium Automation Framework From Scratch! You're Not Alone!</h1>
                    <div class="author">
                        <div class="img_author">
                            <img src="assets/img/blog_img/author_1.png" alt="">
                            <span>by <strong>Thao Le</strong></span>
                        </div>
                        <span class="date">23 Dec, 2019</span>
                    </div>
                    <div class="main_blog">
                        <img src="/msrobot.tech.PHP/assets/img/blog_img/Rectangle2.png" alt="">
                        <div class="content_blog">
                            <span>
                                In this article I will tell you my experience to create Selenium Automation Framework From Scratch. 
                                You will learn:
                            </span>
                            <ul>
                                <li>- Why you need an Automation Framework</li>
                                <li>- Why it is very hard to implement a framework</li>
                                <li>- How to start building Selenium Automation Framewor</li>
                                <li>- How to achieve your goal of having a correct and good Automation Framework Let’s get started.</li>
                            </ul>
                            <span id="letgo">Let's get started</span>
                        </div>
                        <div class="reading">
                            <strong>320</strong>
                            <span>Comment</span>
                            <!-- <button class="reading-btn">Continue Reading</button> -->
                            <button class="reading-btn_block">Unlock now <i class='bx bx-lock' ></i></button>
                        </div>
                    </div> 
                    <hr> 
                </div>

    
            </div>


            <!-- item_blog -->
            <div class="title-item_blog">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class='bx bx-search'></i>
                </div>

                <div class="item_popular">
                    <h3>Popular articles</h3>

                    <hr>
                    <div class="item_blog">
                        <a href="#">
                            <span class="active_blog">QA Analyst salary vs Test Automation Developer or QA Engineer salary.</span>
                        </a>
                        <span class="date">23 July, 2018</span>
                        <hr>
                    </div>
    
                    <div class="item_blog">
                        <a href="#">
                            <span>The fastest way to learn Selenium in Java language.</span>
                        </a>
                        <span class="date">23 July, 2018</span>
                        <hr>
                    </div>
    
                    <div class="item_blog">
                        <a href="#">
                            <span>Can't create Selenium Automation Framework from scratch! You're not alone!</span>
                        </a>
                        <span class="date">23 July, 2018</span>
                        <hr>
                    </div>
    
                    <div class="item_blog">
                        <a href="#">
                            <span>QA Analyst salary vs Test Automation Developer or QA Engineer salary.</span>
                        </a>
                        <span class="date">23 July, 2018</span>
                        <hr>
                    </div>
                </div> 

                <div class="item_recent">
                    <h3>Popular articles</h3>
                    <hr>
                    <div class="item_blog">
                        <a href="#">
                            <span class="active_blog">QA Analyst salary vs Test Automation Developer or QA Engineer salary.</span>
                        </a>
                        <span class="date">23 July, 2018</span>
                        <hr>
                    </div>
                    <div class="item_blog">
                        <a href="#">
                            <span>The fastest way to learn Selenium in Java language.</span>
                        </a>
                        <span class="date">23 July, 2018</span>
                        <hr>
                    </div>
    
                    <div class="item_blog">
                        <a href="#">
                            <span>Can't create Selenium Automation Framework from scratch! You're not alone!</span>
                        </a>
                        <span class="date">23 July, 2018</span>
                        <hr>
                    </div>
    
                    <div class="item_blog">
                        <a href="#">
                            <span>QA Analyst salary vs Test Automation Developer or QA Engineer salary.</span>
                        </a>
                        <span class="date">23 July, 2018</span>
                        <hr>
                    </div>
                </div> 

                
                <div class="item_recent">
                    <h3>Keywords</h3>
                    <hr>
                    <div class="btn_blog">
                        <button class="btn_blog-item">Ideas</button>
                        <button class="btn_blog-item">Education</button>
                        <button class="btn_blog-item">Design</button>
                        <button class="btn_blog-item">Development</button>
                        <button class="btn_blog-item">SELENIUM</button>
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