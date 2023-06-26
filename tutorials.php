<?php $pageTitle = 'Turorials'; ?>

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
                        <li id="home"><a href="home.php">Home</a></li>
                        <li id="tutorial"><a href="tutorials.php" class="active">Tutorial</a></li>
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
                    </div> -->

                </nav>
            </header>

            <div class="title_box">
                <h1>TUTORIALS</h1>
            </div>

            <main class="main">


                <!-- Container -->
                <div class="container">
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
                <div class="tutorial_container">
                    <div class="tutorial_container_1">
                        <div class="content_ctn">
                            <h4>Jmeter Fundamentals, Install and Create A Basic Jmeter Test Plan</h4><br>
                            <span>Browser Recording, WorkBench, Running Your First Test, Listener, Reading Test
                                Result</span><br>
                            <span>Toolbars, Log Into A Website, Regular Expression Extractor</span><br>
                            <span>Handle Dynamic Token, Assertions, Using CSV Data File</span><br>
                            <span>Jmeter Components</span><br>
                            <span>Throughput, Function Helper, Saving Test Result</span><br>
                            <span>Remote Jmeter, Plugins Manager, Variables</span><br>
                            <span>HTTP Simple Table Server, Json Format, Bean Shell Script</span><br>
                        </div>
                    </div>
                    <div class="tutorial_container_2">
                        <div class="img_top">
                            <img id="img_top" src="/msrobot.tech.PHP/assets/img/tutorials/container_2.png" alt="">
                        </div>
                        <div class="blog_container">

                            <div class="blog_tutorials">
                                <h3>Jmeter Fundamentals, Install and Create A Basic Jmeter Test Plan</h3>
                            </div>

                            <div class="container_blog">
                                <h3>Load, Stress And Performance Test</h3>
                                <span>
                                    <strong>Load test:</strong> is the testing how the system works by increasing the
                                    load sending to the system. With load testing,
                                    we will know how many user using software product that the system still works
                                    properly.</span>
                                <br>

                                <span>
                                    <strong>Performance test:</strong>
                                    is the testing how software application performed such as how long
                                    it takes for the servers to response. With performance testing,
                                    we will know how long it takes for a software product get response so that we can
                                    improve the quality of software by making sure
                                    it will be run in the expected time response.
                                </span><br>

                                <span>
                                    <strong>Stress test:</strong>
                                    is the testing how the system works under stress. With stress test,
                                    we will know at which point the system will be failed and
                                    how the system recovers back.
                                </span><br>
                            </div>

                            <div class="container_blog">
                                <h3>What Is Jmeter?</h3>
                                <span>
                                    <strong>Jmeter </strong>is a free application testing software from The Apache
                                    Software
                                    Foundation. </span>
                                <br>

                                <span>
                                    <strong>Jmeter </strong>
                                    is a tool for running Load test, Performance test or Stress test.
                                    It is designed for testing Web Application,
                                    Web services (Soap & Rest api) and more.
                                </span><br>

                            </div>

                            <div class="container_blog">
                                <h3>Jmeter </h3>
                                <span>
                                    <strong>Jmeter </strong>
                                    acts like a group of users sending requests to a target server.
                                    It collects response from target server and other information which show the
                                    performance
                                    of the
                                    application via graphs or summary tables.
                                </span>
                                <br>
                            </div>

                            <div class="container_blog">
                                <h3>Why Use Jmeter? </h3>
                                <span>
                                    <strong>Jmeter </strong>
                                    is an open-source application. Therefore, it is very popular Test tool.
                                </span>
                                <br>

                                <span>
                                    <strong>Jmeter </strong>
                                    has been created for 15 years and has a large community supporting.
                                </span>
                                <br>

                                <span>
                                    <strong>Jmeter </strong>
                                    is one of the top Software Testing Tool for automation.
                                    Most of the opening job for software tester,
                                    QA engineer, Automation analyst, QA Analyst require or “good to have” Jmeter skill.
                                </span>
                                <br>

                            </div>

                            <div class="container_blog">
                                <h3>Install Jmeter </h3>
                                <span>
                                    Below is Operating Systems can be run Jmeter. Even if your OS is not listed,
                                    meter should run on it provided that the JVM is compliant.
                                </span>
                                <br>
                                <img src="/msrobot.tech.PHP/assets/img/tutorials/container_2_1.png" alt="">
                            </div>

                            <div class="container_blog">
                                <h3>Download Java: </h3>
                                <span>
                                    Latest java version: <a href="https://www.java.com/en/download/windows-64bit.jsp"
                                        style="color: rgba(75, 145, 249, 1);">https://www.java.com/en/download/windows-64bit.jsp</a>
                                </span>
                                <br>
                                <span>Following the Instruction from Java to install. Then set up JAVA_HOME environment
                                    variable by these steps </span>
                                <br>
                                <span style="font-size: 1.1rem;">- Open Control Panel\System and Security\System on your
                                    computer</span>
                                <br>
                                <img src="/msrobot.tech.PHP/assets/img/tutorials/container_2_2.png" alt="">
                                <br>
                                <span style="font-size: 1.1rem;">- Choose Advance system setting</span>
                                <br>
                                <img src="/msrobot.tech.PHP/assets/img/tutorials/container_2_3.png" alt="">
                                <br>
                                <span style="font-size: 1.1rem;">- Click on Environment Variables</span>
                                <img src="/msrobot.tech.PHP/assets/img/tutorials/container_2_4.png" alt="">
                                <br>
                                <span style="font-size: 1.1rem;">- Select Path under System variables and click on
                                    Edit</span>
                                <img src="/msrobot.tech.PHP/assets/img/tutorials/container_2_5.png" alt="">
                                <br>

                                <span style="font-size: 1.1rem;">
                                    - At the end of Variable value, put path where is Java\Bin folder such as
                                    <strong>C:\Program Files (x86)\Java\jre1.8.0_91\bin</strong>
                                </span>
                                <br>
                                <span style="font-size: 1.1rem;">
                                    - Then click on OK. Make sure you don’t remove any existing Variable value.
                                </span>
                                <br>
                                <span>
                                    <Strong>Download Jmeter:</Strong>
                                    <a href="http://Jmeter.apache.org/download_Jmeter.cgi"
                                        style="color: rgba(75, 145, 249, 1);">
                                        http://Jmeter.apache.org/download_Jmeter.cgi
                                    </a>
                                </span>
                                <br>
                                <span>
                                    - To install Jmeter, simply unzip the zip/tar
                                    file into the directory where you want Jmeter to be installed (zip file is for
                                    Window,
                                    tar file is for Unix).
                                    Make sure that you have a JRE/JDK correctly installed and the JAVA_HOME environment
                                    variable set.
                                </span>
                                <br>
                                <span>
                                    <strong>To run Jmeter:</strong>
                                    run the Jmeter.bat (for Windows) or Jmeter (for Unix) file. These files are found in
                                    the
                                    bin directory.
                                </span>
                                <br>
                                <h3>Jmeter Test Plan: Basic Elements (Thread Group, Sampler, Assertion, Listener)</h3>
                                <br>
                                <span>
                                    <strong>Thread group:</strong>
                                    is to set up number of user to run the test.
                                </span>
                                <br>
                                <span>
                                    <strong>Sampler:</strong>
                                    is the request for running the test (http/https/soap/rest).
                                </span>
                                <br>
                                <span>
                                    <strong>Assertions:</strong>
                                    are to use for comparing the actual result with the expected result so that we can
                                    decide if the test is passed.
                                </span>
                                <br>
                                <span>
                                    <strong>Listeners:</strong>
                                    are the reports from Jmeter.
                                </span>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="tutorial_container_3">
                        <div class="box_img">
                            <img src="/msrobot.tech.PHP/assets/img/tutorials/container_3.png" alt="">
                            <img src="/msrobot.tech.PHP/assets/img/tutorials/container_3_2.png" alt="">
                            <img src="/msrobot.tech.PHP/assets/img/tutorials/container_3_3.png" alt="">
                            <img src="/msrobot.tech.PHP/assets/img/tutorials/container_3_4.png" alt="">
                        </div>
                    </div>
                </div>

                <!-- main - contend -->


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


        <?php include 'footer.php'; ?>
    </body>

</php>