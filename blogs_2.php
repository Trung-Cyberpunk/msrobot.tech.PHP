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
                        <li id="blog"><a href="blogs.php" class="active">Blog</a></li>
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
                    </div> -->

                </nav>
            </header>

            <div class="title_box">
                <h1>BLOG</h1>
                <hr style="width: 100%">
            </div>

            <div class="ct_blog">
                <div class="container_content-blog">
                    <h3>How Did I Learn Selenium When I Have A Full-time Job</h3>
                    <span>
                        In this article I will tell you my experience to learn
                        Selenium Webdriver and Java programming when I’m working with a full-time job.
                        You will learn:
                    </span>
                    <ul id="ct_blog">
                        <li>- How to start your learning journey </li>
                        <li>- How to learn faster in small time</li>
                        <li>- How to learn Java language (and yes, it’s hard!)</li>
                        <li>- How to make sure you can achieve your learning goal</li>
                    </ul>
                </div>
                <img src="assets/img/blog_img/imgblogitem.png" alt="">
            </div>

            <div class="ct_blog_2">
                <h4>How to start your learning journey</h4>
                <span>To start your self-learning, you need to learn for free on the internet. Its recommendations are
                    based on a review of the existing academic literature which is complemented by the analysis of
                    numerous contributions by software developers, self-learners, and teachers of programming.
                    Additionally, it incorporates effective learning techniques derived from psychological research. Its
                    intended readers are primarily entrepreneurs and ‘startup people’ who are driven to build new
                    businesses with code, although the proposed approach is also transferable to other domains and
                    audiences.</span>
                <span>
                    The single most important factor for succeeding in learning programming has been found to be of
                    human nature: learner motivation and persistence. While most beginners and the majority of academic
                    contributions focus mostly on technical aspects such as which language to learn first, or which
                    learning resources to use, this paper analyzes the learning process itself. Learning programming is
                    thus divided into three main steps:<br>
                    First, I highlight the importance of setting a strong learning goal for motivation, and provide a
                    big-picture overview of what ‘learning programming’ encompasses to structure the approach.<br>
                    Second, I provide learners with recommendations as to which language to learn first - there is no
                    one ‘best’ choice - as well as how and where to find effective learning resources.<br>
                    Lastly, the paper concludes with tips for optimizing the learning process by introducing effective
                    learning techniques, highlighting the importance of programming practice, and collecting additional
                    advice from programmers and self-learners.<br>
                </span>

                <div class="box_share">
                    <p>22,591</p>
                    <span style="font-size: 0.7rem;">shares</span>
                    <a href="#"><img src="assets/img/blog_img/Facebook.png" alt=""></a>
                    <a href="#"><img src="assets/img/blog_img/Twitter.png" alt=""></a>
                </div>
            </div>

            <div class="ct_blog_3">
                <H3 id="title_blog_3">How to learn faster in small time</H3>
                <p id="content_blog_3">
                    While it's nice to think you can hack your way to success, whenever you try to accomplish a huge
                    goal -- like starting and growing a business -- skills matter. Who you know is certainly
                    important.<br>
                    But what you know, and what you can do, matters a whole lot more.
                    Which means the faster you learn, the more successful you can be.
                </p>
                <p id="content_blog_3">
                    So let's jump right in.Here are five ways, backed by science, to speed up the learning process.
                </p>
                <ul>
                    <li>
                        <h4 class="item_blog_3">1. Take notes by hand, not on a computer.</h4>
                        <p id="content_blog_3">
                            Most of us can type faster than we can write. (And a lot more neatly.) <br>
                            But research shows handwriting your notes means you'll learn more. Oddly enough, taking
                            notes by hand enhances both comprehension and retention, possibly because instead of just
                            serving as a quasi-stenographer, you're forced to put things in your own words in order to
                            keep up.<br>
                            Which means you'll remember what you heard a lot longer.<br></p>
                    </li>
                    <li>
                        <h4 class="item_blog_3">2. Chunk your study sessions.</h4>
                        <p id="content_blog_3">
                            You're busy. So you wait until the last minute to learn what you need to know: A
                            presentation, a sales demo, an investor pitch... <br>
                            Bad idea. Research shows "distributed practice" is a much more effective way to learn. <br>
                            Imagine you want to nail your investor pitch. Once you've drafted your pitch, run through it
                            once. Then take a few minutes to make corrections and revisions.<br>
                        </p>
                    </li>
                    <li>
                        <h4 class="item_blog_3">3. Test yourself. A lot.</h4>
                        <p id="content_blog_3">
                            A number of studies show that self-testing is an extremely effective way to speed up the
                            learning process.<br>
                            Partly that's due to the additional context created; if you test yourself and answer
                            incorrectly, not only are you more likely to remember the right answer after you look it
                            up... you'll also remember that you didn't remember. (Getting something wrong is a great way
                            to remember it the next time, especially if you tend to be hard on yourself.)<br>
                        </p>
                    </li>
                    <li>
                        <h4 class="item_blog_3">4. Change the way you practice.</h4>
                        <p id="content_blog_3">
                            Repeating anything over and over again in the hopes you will master that task will not only
                            keep you from improving as quickly as you could, in some cases it may actually decrease your
                            skill. <br>
                            According to recent research from Johns Hopkins, if you practice a slightly modified version
                            of a task you want to master, "you actually learn more and faster than if you just keep
                            practicing the exact same thing multiple times in a row." The most likely cause is
                            reconsolidation, a process where existing memories are recalled and modified with new
                            knowledge.<br>
                        </p>
                    </li>
                    <li>
                        <h4 class="item_blog_3">5. Teach someone else.</h4>
                        <p id="content_blog_3">
                            It may be occasionally true that those who can't, teach... but research shows it's
                            definitely true that those who teach speed up their learning and retain more. <br>
                            Even just thinking that you'll need to teach someone can make you learn more effectively.
                            According to the researchers, "When teachers prepare to teach, they tend to seek out key
                            points and organize information into a coherent structure. Our results suggest that students
                            also turn to these types of effective learning strategies when they expect to teach."<br>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="ct_blog_cmt">

                <div class="author_by">
                    <div class="img_author">
                        <img src="assets/img/blog_img/author_1.png" alt="">
                        <span>by <strong>Thao Le</strong></span>
                    </div>
                    <span class="logo_fb_tw">
                        <span>Share: </span>
                        <img src="/msrobot.tech.PHP/assets/img/blog_img/Facebook.png" alt="fb">
                        <img src="/msrobot.tech.PHP/assets/img/blog_img/Twitter.png" alt="tw">
                    </span>
                </div>
                <hr style="
            border-style: solid;
            border-width: 0.1px;
            border-color: #AFCFFF;
            opacity: 0.5;
            ">
                <div class="blog_cmt">
                    <h3>2 Comments</h3>
                    <hr style="
                border-style: solid;
                border-width: 0.1px;
                border-color: #AFCFFF;
                opacity: 0.5;
                ">
                    <!-- item_1 -->
                    <div class="cmt_item">
                        <div class="container_cmt">
                            <img src="assets/img/blog_img/cmt_img.png" alt="">
                            <button id="reply">REPLY</button>
                            <div id="content_cmt">
                                <span class="name_">Rashed ka.</span>
                                <br>
                                <span class="date_time">13 June, 2018, 7:30pm</span>
                                <p id="content_cmt">
                                    One touch of a red-hot stove is usually all we need to avoid that kind of discomfort
                                    in future.
                                    The same true we experience the emotional sensation.
                                </p>
                            </div>
                        </div>
                        <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">
                    </div>
                    <!-- item_2 -->
                    <div class="cmt_item">
                        <div class="container_cmt">
                            <img src="assets/img/blog_img/cmt_img.png" alt="">
                            <button id="reply">REPLY</button>
                            <div id="content_cmt">
                                <span class="name_">Rashed ka.</span>
                                <br>
                                <span class="date_time">13 June, 2018, 7:30pm</span>
                                <p id="content_cmt">
                                    One touch of a red-hot stove is usually all we need to avoid that kind of discomfort
                                    in future.
                                    The same true we experience the emotional sensation.
                                </p>
                            </div>
                        </div>
                        <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">
                    </div>

                </div>

            </div>


            <div class="leave_cmt">
                <div class="container_box_cmt">
                    <h3>Leave a Comment</h3>
                    <span>Your email address will not be published. Required fields are marked*</span>
                    <div class="container_leave">
                        <input type="text" placeholder="Your Name*" required>
                        <input type="text" placeholder="Your Email*" required>
                    </div>
                    <textarea placeholder="Your Comment*" required></textarea>
                    <button>Submit Comment</button>
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