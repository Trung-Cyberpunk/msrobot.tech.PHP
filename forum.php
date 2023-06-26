<?php $pageTitle = 'Forum'; ?>
<!DOCTYPE php>
<php lang="en">
    <?php include 'header.php'; ?>

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
                        <li id="forum"><a href="forum.php" class="active">Forum</a></li>
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
                    </div> -->

                </nav>
            </header>

            <div class="title_box">
                <h1>FORUM</h1>
            </div>

            <div class="forum_fb">
                <div class="your_question">
                    <input type="text" id="question-input" placeholder="Enter your question">
                    <button id="Search-btn">Search</button>
                </div>
            </div>

            <div class="question_container-item">
                <div class="question_content">
                    <div class="title_question">
                        <h1>categoriY <strong style="color: rgba(7, 68, 242, 1);">Q & A with Our Test Automation
                                Architect
                                team</strong></h1>
                        <button id="ask_qs">Ask Question</button>
                    </div>
                    <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">

                    <div class="total_qs">
                        <h3>TOTAL QUESTION: <strong style="color:rgba(7, 68, 242, 1);">60</strong></h3>
                        <div class="btn_selection">
                            <button id="selection_newest">Newest</button>
                            <button id="selection_answers">Answers</button>
                            <button id="selection_views">Views</button>
                            <button id="selection_asked-by">Asked by</button>
                        </div>
                    </div>

                    <div class="qs_item-container">
                        <!-- itemm -->
                        <div class="qs_item-box">
                            <div class="number_box">
                                <img src="/msrobot.tech.PHP/assets/img/forum/01.png" alt="">
                                <span id="number_item">0</span>
                            </div>

                            <div class="box_qs">
                                <a href="forum_2.php">
                                    <h3>Do you see this question? Q & A with our Test Automation Architect team</h3>
                                </a>
                                <span>
                                    To start your self-learning, you need to learn for free on the internet.
                                    Its recommendations are based on a review of the existing academic
                                    literature which is complemented by the analysis of numerous contributions by
                                    software
                                    developers,
                                    self-learners, and teachers of programming.
                                </span>

                                <div class="information">
                                    <span>Asked in: <strong style="color:rgba(7, 68, 242, 1);">Selenium</strong></span>
                                    <span>Asked by: <strong style="color:rgba(7, 68, 242, 1)">Thao Le</strong></span>
                                    <span>Asked on: January 30, 2020</span>
                                </div>
                            </div>

                            <div class="information_qs">
                                <div class="votes">
                                    <span>18</span>
                                    <p>Votes</p>
                                </div>
                                <div class="answers">
                                    <span>2</span>
                                    <p>Answers</p>
                                </div>
                                <span>3k Views</span>
                            </div>
                        </div>
                        <!-- itemm -->
                        <div class="qs_item-box">
                            <div class="number_box">
                                <img src="/msrobot.tech.PHP/assets/img/forum/01.png" alt="">
                                <span id="number_item">0</span>
                            </div>

                            <div class="box_qs">
                                <a href="forum_2.php">
                                    <h3>Do you see this question? Q & A with our Test Automation Architect team</h3>
                                </a>
                                <span>
                                    To start your self-learning, you need to learn for free on the internet.
                                    Its recommendations are based on a review of the existing academic
                                    literature which is complemented by the analysis of numerous contributions by
                                    software
                                    developers,
                                    self-learners, and teachers of programming.
                                </span>

                                <div class="information">
                                    <span>Asked in: <strong style="color:rgba(7, 68, 242, 1);">Selenium</strong></span>
                                    <span>Asked by: <strong style="color:rgba(7, 68, 242, 1)">Thao Le</strong></span>
                                    <span>Asked on: January 30, 2020</span>
                                </div>
                            </div>

                            <div class="information_qs">
                                <div class="votes">
                                    <span>18</span>
                                    <p>Votes</p>
                                </div>
                                <div class="answers">
                                    <span>2</span>
                                    <p>Answers</p>
                                </div>
                                <span>3k Views</span>
                            </div>
                        </div>
                        <!-- itemm -->
                        <div class="qs_item-box">
                            <div class="number_box">
                                <img src="/msrobot.tech.PHP/assets/img/forum/01.png" alt="">
                                <span id="number_item">0</span>
                            </div>

                            <div class="box_qs">
                                <a href="forum_2.php">
                                    <h3>Do you see this question? Q & A with our Test Automation Architect team</h3>
                                </a>
                                <span>
                                    To start your self-learning, you need to learn for free on the internet.
                                    Its recommendations are based on a review of the existing academic
                                    literature which is complemented by the analysis of numerous contributions by
                                    software
                                    developers,
                                    self-learners, and teachers of programming.
                                </span>

                                <div class="information">
                                    <span>Asked in: <strong style="color:rgba(7, 68, 242, 1);">Selenium</strong></span>
                                    <span>Asked by: <strong style="color:rgba(7, 68, 242, 1)">Thao Le</strong></span>
                                    <span>Asked on: January 30, 2020</span>
                                </div>
                            </div>

                            <div class="information_qs">
                                <div class="votes">
                                    <span>18</span>
                                    <p>Votes</p>
                                </div>
                                <div class="answers">
                                    <span>2</span>
                                    <p>Answers</p>
                                </div>
                                <span>3k Views</span>
                            </div>
                        </div>
                        <!-- itemm -->
                        <div class="qs_item-box">
                            <div class="number_box">
                                <img src="/msrobot.tech.PHP/assets/img/forum/01.png" alt="">
                                <span id="number_item">0</span>
                            </div>

                            <div class="box_qs">
                                <a href="forum_2.php">
                                    <h3>Do you see this question? Q & A with our Test Automation Architect team</h3>
                                </a>
                                <span>
                                    To start your self-learning, you need to learn for free on the internet.
                                    Its recommendations are based on a review of the existing academic
                                    literature which is complemented by the analysis of numerous contributions by
                                    software
                                    developers,
                                    self-learners, and teachers of programming.
                                </span>

                                <div class="information">
                                    <span>Asked in: <strong style="color:rgba(7, 68, 242, 1);">Selenium</strong></span>
                                    <span>Asked by: <strong style="color:rgba(7, 68, 242, 1)">Thao Le</strong></span>
                                    <span>Asked on: January 30, 2020</span>
                                </div>
                            </div>

                            <div class="information_qs">
                                <div class="votes">
                                    <span>18</span>
                                    <p>Votes</p>
                                </div>
                                <div class="answers">
                                    <span>2</span>
                                    <p>Answers</p>
                                </div>
                                <span>3k Views</span>
                            </div>
                        </div>
                        <!-- itemm -->
                        <div class="qs_item-box">
                            <div class="number_box">
                                <img src="/msrobot.tech.PHP/assets/img/forum/01.png" alt="">
                                <span id="number_item">0</span>
                            </div>

                            <div class="box_qs">
                                <a href="forum_2.php">
                                    <h3>Do you see this question? Q & A with our Test Automation Architect team</h3>
                                </a>
                                <span>
                                    To start your self-learning, you need to learn for free on the internet.
                                    Its recommendations are based on a review of the existing academic
                                    literature which is complemented by the analysis of numerous contributions by
                                    software
                                    developers,
                                    self-learners, and teachers of programming.
                                </span>

                                <div class="information">
                                    <span>Asked in: <strong style="color:rgba(7, 68, 242, 1);">Selenium</strong></span>
                                    <span>Asked by: <strong style="color:rgba(7, 68, 242, 1)">Thao Le</strong></span>
                                    <span>Asked on: January 30, 2020</span>
                                </div>
                            </div>

                            <div class="information_qs">
                                <div class="votes">
                                    <span>18</span>
                                    <p>Votes</p>
                                </div>
                                <div class="answers">
                                    <span>2</span>
                                    <p>Answers</p>
                                </div>
                                <span>3k Views</span>
                            </div>
                        </div>
                        <!-- itemm -->
                        <div class="qs_item-box">
                            <div class="number_box">
                                <img src="/msrobot.tech.PHP/assets/img/forum/01.png" alt="">
                                <span id="number_item">0</span>
                            </div>

                            <div class="box_qs">
                                <a href="forum_2.php">
                                    <h3>Do you see this question? Q & A with our Test Automation Architect team</h3>
                                </a>
                                <span>
                                    To start your self-learning, you need to learn for free on the internet.
                                    Its recommendations are based on a review of the existing academic
                                    literature which is complemented by the analysis of numerous contributions by
                                    software
                                    developers,
                                    self-learners, and teachers of programming.
                                </span>

                                <div class="information">
                                    <span>Asked in: <strong style="color:rgba(7, 68, 242, 1);">Selenium</strong></span>
                                    <span>Asked by: <strong style="color:rgba(7, 68, 242, 1)">Thao Le</strong></span>
                                    <span>Asked on: January 30, 2020</span>
                                </div>
                            </div>

                            <div class="information_qs">
                                <div class="votes">
                                    <span>18</span>
                                    <p>Votes</p>
                                </div>
                                <div class="answers">
                                    <span>2</span>
                                    <p>Answers</p>
                                </div>
                                <span>3k Views</span>
                            </div>
                        </div>
                        <!-- itemm -->
                        <div class="qs_item-box">
                            <div class="number_box">
                                <img src="/msrobot.tech.PHP/assets/img/forum/01.png" alt="">
                                <span id="number_item">0</span>
                            </div>

                            <div class="box_qs">
                                <a href="forum_2.php">
                                    <h3>Do you see this question? Q & A with our Test Automation Architect team</h3>
                                </a>
                                <span>
                                    To start your self-learning, you need to learn for free on the internet.
                                    Its recommendations are based on a review of the existing academic
                                    literature which is complemented by the analysis of numerous contributions by
                                    software
                                    developers,
                                    self-learners, and teachers of programming.
                                </span>

                                <div class="information">
                                    <span>Asked in: <strong style="color:rgba(7, 68, 242, 1);">Selenium</strong></span>
                                    <span>Asked by: <strong style="color:rgba(7, 68, 242, 1)">Thao Le</strong></span>
                                    <span>Asked on: January 30, 2020</span>
                                </div>
                            </div>

                            <div class="information_qs">
                                <div class="votes">
                                    <span>18</span>
                                    <p>Votes</p>
                                </div>
                                <div class="answers">
                                    <span>2</span>
                                    <p>Answers</p>
                                </div>
                                <span>3k Views</span>
                            </div>
                        </div>

                        <!-- Phân trang  -->
                        <div class="paging">
                            <nav class="paging_item">
                                <a href="#">15</a>
                                <a href="#">30</a>
                                <a href="#">50</a>
                                <span>Per page</span>
                            </nav>

                            <nav class="paging_item">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">...</a>
                                <a href="#">8</a>
                                <a href="#" style="width: 150px">Next >></a>
                            </nav>
                        </div>

                    </div>
                </div>
                <div class="question_content-total">
                    <h1>TOTAL QUESTION: 72</h1>
                    <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">
                    <br><br><br><br>
                    <h1>categories</h1>
                    <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">
                    <div class="category active">
                        <span id="number_QA">60</span>
                        <span id="name_QA">Q & A with our Test Automation Architect team</span>
                    </div>
                    <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">
                    <div class="category">
                        <span id="number_QA">12</span>
                        <span id="name_QA">General discussion</span>
                    </div>
                    <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">

                    <div class="img_qa">
                        <img src="assets/img/tutorials/container_3.png" alt="">
                        <img src="assets/img/tutorials/container_3_2.png" alt="">
                        <img src="assets/img/tutorials/container_3_3.png" alt="">
                        <img src="assets/img/tutorials/container_3_4.png" alt="">

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