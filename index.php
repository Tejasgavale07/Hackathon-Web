<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOE PRAYAS
    </title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="fixed-top">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home">SCOE PRAYAS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About us</a>
                            </li>
                            

                            <?php if(isset($_SESSION["login-user"])){?>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>  
                            <?php   } 

                            else{
                            ?> 

                            <li class="nav-item">
                                <a class="nav-link" href="new_login.php">Allumni</a>
                            </li>
                            <!-- ChatApp -->
                            <?php }?>
                            <?php if(isset($_SESSION["login-clg"])){?>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">College</a>
                                </li>  
                            <?php   } 

                            else{
                            ?> 

                            <li class="nav-item">
                                <a class="nav-link" href="clg_login.php">College</a>
                            </li>
                            <?php }?>
                            <?php if(isset($_SESSION["login-dir"])){?>
                                <li class="nav-item">
                                    <a class="nav-link imp" href="logout.php">Directorate</a>
                                </li>  
                            <?php   } 

                            else{
                            ?> 

                            <li class="nav-item">
                                <a class="nav-link" href="dir_login.php">Directorate</a>
                            </li>
                            <?php }?>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="cont-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Contact No : <a href="tel: +91 698*******">+91 698*******</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="social">
                            <a href="https://www.facebook.com/ " target="_blank"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="https://www.youtube.com/" target="_blank"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="https://www.linkedin.com/" target="_blank"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="home-sec" id="home">
        <div class="container">
            <div class="home-content">
                <div class="row">
                    <div class="col-lg-6 align-item-center">
                        <div class="home-info">
                            <h1>I'm proud to call myself a Generous alumnus....</h1>
                            <h2>We <span>SCOE PRAYAS</span> manage data for Colleges and Directorates.</h2>
                            <p>The key is not to worry about being successful, but to instead work toward being significant-and the success will naturally follow. -Oprah</p>
                            <!-- <div class="buttons">
                                <a href="#donation" class="btn1">Donate now</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <img src="img/alumni1.jpg" alt="home-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </div>
                <div class="col-lg-4">
                    
                </div>
            </div>
        </div>
    </section>

    <section class="mission" id="mission-id">
        <div class="container">
            <div class="heading">
                <h2>Our Missions</h2>
               
                <p>Our Designed Model Contains the Features Like <span> Group Chat </span>, <span> Event Creation Portal</span> ,<span> Interacting  </span>with Alumni using <span> Messages </span>and <span> Emails</span>, Verification and Updating Alumni Information.</p>
            </div>
            <div class="gallery-sec">
                <div class="container">
                    <div class="image-container">
                        <div class="image"><img src="img/miss1.png" alt="img"></div>
                        <div class="image"><img src="img/miss2.jpeg" alt="img"></div>
                        <div class="image"><img src="img/miss3.jpeg" alt="img"></div>
                        <div class="image"><img src="img/miss4.jpeg" alt="img"></div>
                        <div class="image"><img src="img/miss5.jpeg" alt="img"></div>
                        <div class="image"><img src="img/miss6.jpeg" alt="img"></div>
                    </div>
                </div>
                <div class="pop-image">
                    <span>&times;</span>
                    <img src="img/gallery/1.jpg" alt="gallery-img">
                </div>
                </di v>
            </div>
    </section>

    <section class="about-sec" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 about-img">
                    <img src="img/alumni_info.svg" alt="about">
                </div>
                <div class="col-lg-8 order-first order-lg-last">
                    <div class="heading">
                        <h2>What We Do & Why We Do</h2>
                    </div>
                    <p> The knowledge that you’re helping others is hugely empowering and, in turn, can make you feel happier and more fulfilled. Research has identified a link between making a donation to charity and increased activity in the area of the brain that registers pleasure - proving that as the old adage goes, it really is far better to give than to receive. </p>
                    <p>Our own research into why people give supports this. We asked 700 of our generous donors to tell us what motivates them to give regularly to charity; 42% agreed the enjoyment they receive from giving as a key influence. </p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>SCOE PRAYAS</h4>
                        <p>Address : Plot No. 46, near MSEB Sub Station, Sector-5, Kharghar, Navi Mumbai, Maharashtra 410210 </p>
                        <p>Contact No : <a href="tel: +91 698*******">+91 698*******</a></p>
                        <!-- <a href=mailto:tejas.gavale21@gmail.com? subject="">Click here to send us an email!!!</a> -->
                        <p>Email : <a href=mailto:tejas.gavale21@gmail.com? subject=" We Wand to Code!">scoeprayas@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#donation">Donations</a></li>
                            <li><a href="#mission-id">Missions</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="https://www.facebook.com/" target="_blank"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="https://www.youtube.com/" target="_blank"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="https://www.linkedin.com/" target="_blank"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="https://mail.google.com/mail/" target="_blank"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>


<?php 

?>