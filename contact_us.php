<?php $pageTitle = 'Contact us';?>
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
                    <li id="forum"><a href="forum.php"class="active">Forum</a></li>
                    <li id="blog"><a href="blogs.php">Blog</a></li>
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
            <h1>CONTACT US</h1>
        </div>



        <div class="contact_us-container">
            <h3>YOUR INFORMATION</h3>
            <div class="container_ctu">
                <div class="box_information">

                    <div class="information_ct" style="width:48%">
                        <label for="email_information">Your email: <strong style="color: rgba(210, 0, 13, 1);">*</strong></label>
                        <input type="text" id="email_information" placeholder="Enter">
                    </div>

                    <div class="information_ct" style="width:48%">
                        <label for="name_information" >Email: <strong style="color: rgba(210, 0, 13, 1);">*</strong></label>
                        <input type="text" id="name_information" placeholder="Enter">
                    </div>
                    
                    <div class="information_ct" style="width:100%">
                        <label for="subject_information">Subject: <strong style="color: rgba(210, 0, 13, 1);">*</strong></label>
                        <input type="text" id="subject_information" placeholder="Enter">
                    </div>
                    
                    <div class="information_ct" style="width:100%">
                        <label for="message_information">Message:</label>
                        <textarea name="message_information" id="" cols="30" rows="10"placeholder="I would like to know more about MS Robot/Selenium." style="resize:none; padding: 1rem;font-size: 1.1rem; opacity: 0.7; "></textarea>
                    </div>
                </div>
                <span>This will send your message to us for more informations. We will answer your questions by email within 24 hours.</span>
                <button class="sumbit_ctn">Sumbit</button>
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