<?php $pageTitle = 'Forum'; ?>
<!DOCTYPE php>
<php lang="en">
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
                    <li id="forum"><a href="forum.php" class="active">Forum</a></li>
                    <li id="blog"><a href="blogs.php">Blog</a></li>
                    <li id="demo_sites">
                        <a id="header_down" href="#" style="width: 6rem">Demo Sites</a>
                        <ul class="header_insite">
                            <li id="item-header_insite"><a href="basic_site_login.php">Basic Site</a></li>
                            <li id="item-header_insite"><a href="automation_practice_site_login.php">Automation
                                    Practice Site</a></li>
                            <li id="item-header_insite"><a href="automation_actions_site_login.php">Automation Actions
                                    Site</a></li>
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
            <h1>FORUM</h1>
        </div>


        <div class="container_askQS">
            <div class="ask_box">
                <h1>Ask a question</h1>
                <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">

                <div class="ask_box-item">
                    <h3>Title</h3>
                    <p>Be specific and imagine you’re asking a question to another person</p>
                    <input type="text"
                        placeholder="e.g. Is there an R function for finding the index of an element in a vector?">
                    <h3>Body</h3>
                    <p>Include all the information someone would need to answer your question</p>
                    <div id="summernote"><img src="assets/img/forum/Search.png" alt="" style="width:100%"></div>

                    <h3>Tags</h3>
                    <p>Add up to 5 tags to describe what your question is about</p>
                    <input type="text" placeholder="e.g. selenium, automation test">

                    <a href="forum_ask_login.php"><button class="btn_ask">Review your question</button></a>
                </div>
            </div>


            <div class="your_qs">
                <h1>Draft your question</h1>
                <hr style="
                    border-style: solid;
                    border-width: 0.1px;
                    border-color: #AFCFFF;
                    opacity: 0.5;
                    ">
                <p>The community is here to help you with specific coding, algorithm, or language problems.</p>
                <p>Avoid asking opinion-based questions.</p>


                <div class="ask_box-content">
                    <!-- BOX 1 -->
                    <div class="draft_qs">
                        <h4 id="number_dr">1</h4>
                        <div class="box_dr">
                            <label id="title_dr">Summarize the problem</label>
                            <ul class="a">
                                <li style="list-style-type: disc; list-style-position: inside;">Include details about
                                    your goal</li>
                                <li style="list-style-type: disc; list-style-position: inside;">Describe expected and
                                    actual results</li>
                                <li style="list-style-type: disc; list-style-position: inside;">Include any error
                                    messages</li>
                            </ul>
                        </div>
                        <button class="down_dr bx bx-chevron-down"></button>
                        <button class="up_dr bx bx-chevron-up" style="display: none;"></button>
                    </div>
                    <!-- box 2 -->
                    <div class="draft_qs">
                        <h4 id="number_dr">2</h4>
                        <div class="box_dr">
                            <label id="title_dr">Describe what you’ve tried</label>
                            <ul class="a">
                                <li>Show what you’ve tried and tell us what you found (on this site or elsewhere) and
                                    why it didn’t meet your needs. You can get better answers when you provide research.
                                </li>

                            </ul>
                        </div>
                        <button class="down_dr bx bx-chevron-down"></button>
                        <button class="up_dr bx bx-chevron-up" style="display: none;"></button>
                    </div>
                    <!-- box 3 -->
                    <div class="draft_qs">
                        <h4 id="number_dr">3</h4>
                        <div class="box_dr">
                            <label id="title_dr">Summarize the problem</label>
                            <ul class="a">
                                <li>When appropriate, share the minimum amount of
                                    code others need to reproduce your problem
                                    (also called a <strong style="color: rgba(7, 68, 242, 1)">minimum, reproducible
                                        example</strong> )
                                </li>
                            </ul>
                        </div>
                        <button class="down_dr bx bx-chevron-down"></button>
                        <button class="up_dr bx bx-chevron-up" style="display: none;"></button>
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