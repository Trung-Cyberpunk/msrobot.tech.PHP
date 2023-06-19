<?php $pageTitle = 'Automation';?>
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
                    <li id="demo_sites" >
                        <a id="header_down" href="#"style="width: 6rem" class="active">Demo Sites</a>
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
            <h1>AUTOMATION ACTIONS SITE</h1>
        </div>

        <div class="automation_actions">
            <div class="btn_actions">
                <button class="btn-y">Portlets</button>
                <button class="btn-y"id="btn-bgr">Multiple Lists</button>
                <button class="btn-y">Simple List</button>
                <button class="btn-y">Grid Sorting</button>
                <button class="btn-y">Accepted Elements</button>
            </div>
            <div class="item_btn-aciton">
                <!-- item-1 -->
                <div class="container_action">
                    <div class="notify">
                        <div class="title-notify">Re-Order Elements provided. For Ex : Move Car to Motobike place</div>
                        <button id="x_action" class="bx bx-x"></button>
                    </div>
                    <div class="box-action">

                        <div id="item-ac" class="car">
                            <div id="box-ac">
                                <h3>Cart</h3>
                                <button id="clear">-</button>
                            </div>
                            <p>Selenium Automation.</p>
                        </div>

                        <div id="item-ac" class="motorbike">
                            <div id="box-ac">
                                <h3>Motorbike</h3>
                                <button id="clear">-</button>
                            </div>
                            <p>Selenium Automation.</p>
                        </div>

                        <div id="item-ac" class="airplane">
                            <div id="box-ac">
                                <h3>Airplane</h3>
                                <button id="clear">-</button>
                            </div>
                            <p>Selenium Automation.</p>
                        </div>
                        <div id="item-bc">

                        </div>
                        <div id="item-bc">

                        </div>
                        <div id="item-ac" class="train">
                            <div id="box-ac">
                                <h3>Train</h3>
                                <button id="clear">-</button>
                            </div>
                            <p>Selenium Automation.</p>
                        </div>
                        <div id="item-bc">

                        </div>
                        <div id="item-ac" class="ferry">
                            <div id="box-ac">
                                <h3>Cart</h3>
                                <button id="clear">-</button>
                            </div>
                            <p>Selenium Automation.</p>
                        </div>
                        
                        <div id="item-bc">

                        </div>
                        <div id="item-bc">

                        </div>
                        <div id="item-bc">

                        </div>
                        <div id="item-bc">

                        </div>
                        <div id="item-bc">

                        </div>
                        <div id="item-bc">

                        </div>
                        <div id="item-bc">

                        </div>
                        


                    </div>
                </div>
                <!-- item-2 -->
                <div class="container_action" id="container_block">
                    <div class="notify">
                        <div class="title-notify">Re-Order elements of the list from Object 1 to 7</div>
                        <button id="x_action" class="bx bx-x"></button>
                    </div>
                    <div class="container_object">
                        <button class="obj_number">Object 1</button>
                        <button class="obj_number">Object 2</button>
                        <button class="obj_number">Object 3</button>
                        <button class="obj_number">Object 4</button>
                        <button class="obj_number">Object 5</button>
                        <button class="obj_number">Object 6</button>
                        <button class="obj_number">Object 7</button>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="container_action">
                    <div class="notify">
                        <div class="title-notify">Re-Order elements of both the lists and swap them if needed</div>
                        <button id="x_action" class="bx bx-x"></button>
                    </div>
                    <div class="container_object_2">
                        <div class="object_1">
                            <button class="obj-item">Object 1</button>
                            <button class="obj-item">Object 2</button>
                            <button class="obj-item">Object 3</button>
                            <button class="obj-item">Object 4</button>
                            <button class="obj-item">Object 5</button>
                        </div>
                        <div class="object_2">
                            <button class="obj-item">Object 1</button>
                            <button class="obj-item">Object 2</button>
                            <button class="obj-item">Object 3</button>
                            <button class="obj-item">Object 4</button>
                            <button class="obj-item">Object 5</button>
                        </div>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="container_action"> 
                    <div class="notify">
                        <div class="title-notify">Re-Order elements of both the lists and swap them if needed</div>
                        <button id="x_action" class="bx bx-x"></button>
                    </div>
                    <div class="alphabet">
                        <span class="alphabet_item">A</span>
                        <span class="alphabet_item">B</span>
                        <span class="alphabet_item">C</span>
                        <span class="alphabet_item">D</span>
                        <span class="alphabet_item">E</span>
                        <span class="alphabet_item">F</span>
                        <span class="alphabet_item">G</span>
                        <span class="alphabet_item">H</span>
                        <span class="alphabet_item">I</span>
                        <span class="alphabet_item">J</span>
                        <span class="alphabet_item">K</span>
                        <span class="alphabet_item">L</span>
                    </div>
                </div>
                <!-- item 5 -->
                <div class="container_action">
                    <div class="notify">
                        <div class="title-notify">Specify using the “accept” option which element (or group of elements) is accepted by the target droppable.</div>
                        <button id="x_action" class="bx bx-x"></button>
                    </div>
                    <div class="accept">
                        <span>I'm draggable but can't be dropped</span>
                        <span>Drag me to my target</span>
                        <span>Drag me to my target</span>
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