<?php
// require_once "pdo.php";
// if(isset($_POST['mail'])){
//     $sql = "INSERT INTO subscription(email) VALUES (:mail)";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute(array(
//         ':mail'=>$_POST['mail']
//     ));
//     header("Location: index.php");
//     return;
// }
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Heritage Club | Vit Vellore</title>

        <link rel="shortcut icon" href="./assets/heritage.png" type="image/x-icon">

        <!-- basic meta tags -->

        <meta charset="utf-8">
        <meta name="description" content="Heritage club is a rendezvous of like minded enthusiasts who wish to explore the scientific past of our noble land.
        Our objectives include conducting various cultural events, site visits, research work and hands on workshops to wrest the love for our heritage.">
        <meta name="author" content="Heritage Club">
        <meta name="keywords" content="Heritage Club,VIT,Heritage,VIT Vellore,Club,heritage vit">

        <meta name="copyright" content="Heritage-VIT">
        <meta name="language" content="en">
        <meta name="category" content="Heritgae, Events">
        <meta name="coverage" content="Worldwide">
        <meta name="rating" content="General">
        <meta name="og:country-name" content="India">
        <meta name="og:region" content="Vellore,Chennai,Delhi,Mumbai,Kolkata,Kanpur,Bangalore,Hyderabad,Gurgaon">
        <meta name="og:site-name" content="Heritage Club VIT Vellore">

        <meta http-equiv="cache-control" content="max-age=0">
        <meta http-equiv="expires" content="0">
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        
        <!-- OG metas for social media-->

        <meta property="og:title" content="Heritage Club VIT Vellore">
        <meta property="og:image" content="/assets/heritage.png">
        <meta property="og:url" content="https://www.heritagevit.com">
        <meta peoperty="og:type" content="website">
        <meta property="og:description" content="Heritage club is a rendezvous of like minded enthusiasts who wish to explore the scientific past of our noble land.Our objectives include conducting various cultural events, site visits, research work and hands on workshops to wrest the love for our heritage.">
        <meta property="og:site-name" content="Heritage Club VIT Vellore">

        <meta property="twitter:card" content="website">
        <meta property="twitter:title" content="Heritage Club VIT Vellore">
        <meta property="twitter:image" content="/assets/heritage.png">
        <meta property="twitter:url" content="https://www.heritagevit.com">
        <meta property="twitter:description" content="Heritage club is a rendezvous of like minded enthusiasts who wish to explore the scientific past of our noble land.Our objectives include conducting various cultural events, site visits, research work and hands on workshops to wrest the love for our heritage."> 

        <!-- Mobile specific metas -->

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <!-- Stylesheets -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="./styles.css">
        
        <!-- Script files -->
        <script src="https://kit.fontawesome.com/49d21fbf42.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>

    <body id="body" style="overflow: hidden;" onload="exitPreloader()">
        <div id="preloader" style="display: flex;">
            <div id="circle"></div>
            <div id="borderCircle1"></div>
            <div id="borderCircle"></div>
        </div>
        <!-- Landing Wrapper -->

        <div id="Landing-wrapper">
            <div id="Landing-overlay">

                <div id="Club-logo">
                    <a href="./index.html">
                        <img src="./assets/hclogoo.png" width="120" height="120" alt="Heritage club logo">
                    </a>
                </div>
    
                <div id="menu_div">
                    <div id="toggleWrapper">
                        <div id="toggleButton" class="isActive" style="background-color: transparent;">
                            <div id="hamburger" ></div>
                        </div>
                    </div>
                </div>
    
                <!-- CLUB INFO -->
    
                <div id="club_info">
                    <div data-aos="fade-up">
                        <h2>
                            Inherit The Heritage.
                        </h2>
                    </div>
                    <div data-aos="fade-up">
                        <h1>
                            Heritage Club
                        </h1>
                    </div>
                    <div data-aos="fade-up">
                        <h1>
                            VIT Vellore
                        </h1>
                    </div>
                </div>
    
                <!-- EXPLORE BUTTON -->
    
                <div id="Explore_btn_div">
                        <div class="my-btn">
                            <div id="Explore" class="side pro-side default-side">EXPLORE</div>
                            <div  class="side pro-side hover-side">EXPLORE</div>
                        </div>
                </div>
    
                <!-- SOCIAL MEDIA HANDLES -->
    
                <div id="social_media_handles">
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/heritageclubvit"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/heritageclubvit"><i class="fa fa-facebook-square"></i></li>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/heritage-club-vit/"><i class="fa fa-linkedin-square"></i></a>
                        </li>
                    </ul>
                </div>
    
                <!-- SLIDE NAV -->
    
                <div id="slide_nav_div" class="hide">
                    <ul id="slide_nav">
                        <li style="cursor:default;">
                            <h1>Heritage.</h1>
                        </li>
                        <li id="sn" class="abt" onclick="scrollToDiv(this)">
                            About
                        </li>
                        <li id="sn" class="events" onclick="scrollToDiv(this)">
                            Events
                        </li>
                        <li id="sn" class="gallery" onclick="scrollToDiv(this)">
                            Gallery
                        </li>
                        <li id="sn" class="board" onclick="scrollToDiv(this)">
                            Board
                        </li>
                        <li id="sn" class="footer" onclick="scrollToDiv(this)">
                            Contact Us
                        </li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- SCROLL TO TOP -->

        <div style="display: none;" onclick="ScrollUp()" id="up">
            <i id="upArrow" class="fa fa-arrow-up"></i>
        </div>

        <!-- ABOUT US DIV -->

        <div id="AboutUs">
            <h2 data-aos="fade-up" id="AboutUsTitle">
                ABOUT US
            </h2>
            <div  id="AboutUsContent">
                <div data-aos="fade-up" id="Quote">
                <b>
                    "India is the cradle of the human race, the birthplace of human speech, the mother of history, the grandmother of legend, and the great-grandmother of tradition. Our most valuable and most instructive materials in the history of man are treasured up in India only."
                </b>
                </div>
                <div data-aos="fade-up" id="Content">
                    True to that, India, from time immemorial, a focal point of various religions, multitudinous cultures and admirable grandeur of architecture that has gracefully amalgamated into our rich heritage that we boast of today. Now with the ushering in of the twenty- first century we have forayed into the arena of science, technology, and research. India has also been immensely successful in keeping on par with the world and even taking the driver's seat on a number of occasions. We at the heritage club wish to coalesce these two aspects. Numerous travelers who put afoot on the Indian soil heaped praise pertaining to its abounding architecture. Even the stringent of the British never failed to express their awe. We wish to delve deep into those praises. Our objectives include conducting experiments and tests to unearth the science behind those marvels. We as a club conduct various cultural programs, guest lectures, interactive sessions and hands on workshops to wrest the love for history and heritage. Our club is a rendezvous of like minded enthusiasts who wish to explore our scientific past and unravel the mysteries that the rocks and bricks have concealed beneath them for centuries.
                </div>
            </div>
        </div>

        <!-- EVENT DIV -->

        <div id="Event_Wrapper">
            <div id="EventInfo">
                <h3 data-aos="fade-up" id="Event">
                    EVENTS
                </h3>
                <h1 data-aos="fade-up" id="WhatWeDo" style="margin-top: 2rem; color:#fff">
                    What we Do.
                </h1>
                <div data-aos="fade-up" id="EventContent">
                    We follow the motto of learning from the past specifically, in 
                    construction modeling and structuring fields.We analyze the ancient and 
                    medieval techniques and materials.
                </div>
            </div>

            <!-- EVENT LIST ROW 1 -->

            <div data-aos="fade-up" id="EventListRow1">

                <!-- EVENT 1 -->

                <div id="Event1">
                    <div id="EventLogo">
                        <i id="temp" class="fa fa-chalkboard-teacher"></i>
                    </div>
                    <div id="EventName">
                        <h3>
                            <b>HBIM Workshop</b>
                        </h3>
                    </div>
                    <div id="EventContent1">
                        The event presents a complex modelling of heritage structure. In the event students learn about how the process of the information modelling of historic buildings is carried away that can be useful in fields of conservation,facility management,restoration,documentation of heritage structures.Participants gain hands-on experience in modelling a heritage building using Revit software.
                    </div>
                </div>

                <!-- EVENT 2 -->

                <div id="Event2">
                    <div id="EventLogo">
                        <i id="temp" class="fa fa-code"></i>
                    </div>
                    <div id="EventName">
                        <h3>
                            <b>CHISEL</b>
                        </h3>
                    </div>
                    <div id="EventContent2">
                        It was a 24 hour long online competition where participants were asked to recreate a historical monument using the objects that they can easily find. They have to then create a modal using recap software, the participants can also make any modern structure using historical elements such as arches and domes. this will be done by using revit software they will be judged on the basis of their creativity and proper structural usage.
                    </div>
                </div>
            </div>

            <!-- EVENT LIST ROW 2 -->

            <div data-aos="fade-up"  id="EventListRow2">

                <!-- EVENT 1 -->

                <div id="Event1">
                    <div id="EventLogo">
                        <i id="temp" class="fa fa-pencil-ruler"></i>
                    </div>
                    <div id="EventName">
                        <h3>
                            <b>LUMINOUS CREATIF</b>
                        </h3>
                    </div>
                    <div id="EventContent1">
                        Students use their creativity to write 
                        an essay/a poem/draw or make an E-poster based on a heritage site in India. participants think creatively and also relate to the Heritage sites in India. This aims at providing a deep insight of a particular heritage in India.
                    </div>
                </div>

                <!-- Event 2 -->

                <div id="Event2">
                    <div id="EventLogo">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div id="EventName">
                        <h3>
                            <b>CUNSTRAZONE</b>
                        </h3>
                    </div>
                    <div id="EventContent2">
                        This is a team Event.Every team will be given a list of hundred monuments in which they have to select one and make a model of it in either revit or autocad software.This helps the participants to gain knowledge on the working of the software. 
                    </div>

                </div>
            </div>
        </div>

        <!-- GALLERY DIV-->

        <div id="Gallery_Wrapper">
            <div id="GalleryIntro">
                <div data-aos="fade-up" id="GalleryTitle">
                    <h1>GALLERY</h1>
                </div>
                <div data-aos="fade-up" style="margin-top:2rem;color: rgba(255,255,255,0.5)" id="GalleryAbt">
                    <h4>Heritage Club hosts a range of events.</h4> 
                </div>
            </div>

            <!-- GALLERY ROW 1 -->

            <div id="GalleryRow1">
                <div data-aos="fade-up" id="Img1" class="hightlight">
                    <img id="img1" src="./assets/Gallery/55704619_337588913535393_1268845356280446976_n.jpg">
                    <!-- <div id="ImgWrapper">

                    </div> -->
                </div>
                <div data-aos="fade-up" id="Img2">
                    <img id="img2" src="./assets/Gallery/Guests.jpeg">
                    <!-- <div id="ImgWrapper1">

                    </div> -->
                </div>
            </div>

            <!-- GALLERY ROW 2 -->

            <div id="GalleryRow2">
                <div data-aos="fade-up" id="Img1">
                    <img id="img1" src="./assets/Gallery/56306716_337588883535396_8155627305754951680_n.jpg" 
                    >
                    <!-- <div id="ImgWrapper">

                    </div> -->
                </div>
                <div data-aos="fade-up" id="Img2">
                    <img id="img2"  src="./assets/Gallery/Inaugration.jpeg">
                    <!-- <div id="ImgWrapper1">

                    </div> -->
                </div>
            </div>
        </div>

        <!-- BOARD DIV -->

        <div id="Board_Wrapper">
            <div id="overlay">
            <div data-aos="fade-up" id="BoardTitle">
                <h1>Our Team.</h1>
            </div>
            
            <!-- Board Row 1 -->

            <div data-aos="fade-up" id="BoardRow1" class="BoardRow">

                <!-- Member 1 Row 1 -->

                <div  class="member" id="member1">
                    <div id="Board_img" onmouseenter="perform(this)" onmouseleave="leave(this)">
                        <figure>
                            <img id="Board_member" class="Board_member"
                             src="./assets/Board Members/pradeep.png" width="200">
                        </figure>

                        <div style="display: none;" class="Board_img_wrapper">

                        </div>
                        <div class="Member_Details">
                            <div style="display: none;" class="Phone_No">
                                <a href="Tel:
                                9502506142">
                                9502506142            </a>
                            </div>

                            <div style="display: none;" class="Member_social">
                                <a href="mailto:kh.pradeepreddy2018@vitstudent.ac.in">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a href="https://www.facebook.com/pradeepkapureddy">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/pradeep-reddy-kh-ab664a150">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="Board_desc">
                        <div id="Member_Name">
                            PRADEEP
                        </div>
                        <div id="Member_Post">
                            CHAIRPERSON 1
                        </div>
                    </div>
                </div>

                <!-- MEMBER 2 Row 1 -->

                <div class="member" id="member2">
                    <div id="Board_img" onmouseenter="perform(this)" onmouseleave="leave(this)">
                        <figure>
                            <img id="Board_member" class="Board_member"
                             src="./assets/Board Members/tanmay1.jpeg">
                        </figure>

                        <div style="display: none;" class="Board_img_wrapper">

                        </div>
                        <div class="Member_Details">
                            <div style="display: none;" class="Phone_No">
                                <a href="Tel:
                                7622929865">
                                7622929865            </a>
                            </div>

                            <div style="display: none;" class="Member_social">
                                <a href="mailto:tanmay.pati2018@vitstudent.ac.in">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a href="https://www.facebook.com/tanmy4u">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/tanmaypati">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="Board_desc">
                        <div id="Member_Name">
                            TANMAY
                        </div>
                        <div id="Member_Post">
                            CHAIRPERSON 2
                        </div>
                    </div>
                </div>
            </div>

            <!-- Board Row 2 -->

            <div data-aos="fade-up" id="BoardRow2" class="BoardRow">
                <!-- Member 1 row 2 -->
                
                <div class="member" id="member1">
                    <div id="Board_img" onmouseenter="perform(this)"
                    onmouseleave="leave(this)">
                        <figure>
                            <img id="Board_member" class="Board_member"
                             src="./assets/Board Members/prashasti.jpg">
                        </figure>

                        <div style="display: none;" class="Board_img_wrapper">

                        </div>
                        <div class="Member_Details">
                            <div style="display: none;" class="Phone_No">
                                <a href="Tel:
                                9003783081">
                                9003783081            </a>
                            </div>

                            <div style="display: none;" class="Member_social">
                                <a href="mailto:prashasti.saxena2018@vitstudent.ac.in">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a href="https://www.facebook.com/prashasti.saxena.54">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/prashasti-saxena-3b8a631a4">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="Board_desc">
                        <div id="Member_Name">
                            PRASHASTI
                        </div>
                        <div id="Member_Post">
                            SECRETARY 1
                        </div>
                    </div>
                </div> 

                <!-- Member 2 row 2 -->

                <div class="member" id="member2">
                    <div id="Board_img" onmouseenter="perform(this)"
                    onmouseleave="leave(this)">
                        <figure>
                            <img id="Board_member" class="Board_member"
                             src="./assets/Board Members/ruchita.jpeg">
                        </figure>

                        <div style="display: none;" class="Board_img_wrapper">

                        </div>
                        <div class="Member_Details">
                            <div style="display: none;" class="Phone_No">
                                <a href="Tel:
                                9003749353">
                                9003749353            </a>
                            </div>

                            <div style="display: none;" class="Member_social">
                                <a href="mailto:Ruchita.damodar2018@vitstudent.ac.in">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a href="https://www.facebook.com/ruchita.damodar">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/ruchita-damodar-b77253172/">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="Board_desc">
                        <div id="Member_Name">
                            RUCHITA
                        </div>
                        <div id="Member_Post">
                            SECRETARY 2
                        </div>
                    </div>
                </div> 
            </div>

            <!-- Board Row 3 -->
            <div data-aos="fade-up" id="BoardRow3" class="BoardRow">

                <!-- Member 1 row 3 -->
                <div class="member" id="member1">
                    <div id="Board_img" onmouseenter="perform(this)"
                    onmouseleave="leave(this)">
                        <figure>
                            <img id="Board_member" class="Board_member"
                             src="./assets/Board Members/4.jpg">
                        </figure>

                        <div style="display: none;" class="Board_img_wrapper">

                        </div>
                        <div class="Member_Details">
                            <div style="display: none;" class="Phone_No">
                                <a href="Tel:
                                7488004695">
                                7488004695            </a>
                            </div>

                            <div style="display: none;" class="Member_social">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/abhishek-singh-7a400b17b/">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="Board_desc">
                        <div id="Member_Name">
                            ABHISHEK
                        </div>
                        <div id="Member_Post">
                            MEDIA AND MARKETING HEAD
                        </div>
                    </div>
                </div> 

                <!-- Member 2 row 3 -->
                <div class="member" id="member2">
                    <div id="Board_img" onmouseenter="perform(this)"
                    onmouseleave="leave(this)">
                        <figure>
                            <img id="Board_member" class="Board_member"
                             src="./assets/Board Members/aarsh.jpeg">
                        </figure>

                        <div style="display: none;" class="Board_img_wrapper">

                        </div>
                        <div class="Member_Details">
                            <div style="display: none;" class="Phone_No">
                                <a href="Tel:
                                7096343266">
                                7096343266            </a>
                            </div>

                            <div style="display: none;" class="Member_social">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a href="https://www.facebook.com/aarsh.nanavati.7">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/aarsh-nanavati-66b69515a/">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="Board_desc">
                        <div id="Member_Name">
                            AARSH
                        </div>
                        <div id="Member_Post">
                            FINANCE AND EDITORIAL HEAD
                        </div>
                    </div>
                </div> 

                <!-- Member 3 row 3 -->

                <div class="member" id="member3">
                    <div id="Board_img" onmouseenter="perform(this)"
                    onmouseleave="leave(this)">
                        <figure>
                            <img id="Board_member" class="Board_member"
                             src="./assets/Board Members/jigyasa.jpeg">
                        </figure>

                        <div style="display: none;" class="Board_img_wrapper">

                        </div>
                        <div class="Member_Details">
                            <div style="display: none;" class="Phone_No">
                                <a href="Tel:
                                8929271998">
                                8929271998            </a>
                            </div>

                            <div style="display: none;" class="Member_social">
                                <a href="mailto:jigyasa.kumar2018@vitstudent.ac.in">
                                    <i class="fa fa-envelope"></i>
                                </a>
                               
                                <a href="https://www.linkedin.com/in/jigyasa-kumar-236260177">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="Board_desc">
                        <div id="Member_Name">
                            JIGYASA
                        </div>
                        <div id="Member_Post">
                            RESEARCH HEAD
                        </div>
                    </div>
                </div> 
            </div>



        <!---------- Board Row 4 ------------->
        <div data-aos="fade-up" id="BoardRow4" class="BoardRow">

            <!-- Member 1 row 4 -->
            <div class="member" id="member1">
                <div id="Board_img" onmouseenter="perform(this)"
                onmouseleave="leave(this)">
                    <figure>
                        <img id="Board_member" class="Board_member"
                         src="./assets/Board Members/4.jpg">
                    </figure>

                    <div style="display: none;" class="Board_img_wrapper">

                    </div>
                    <div class="Member_Details">
                        <div style="display: none;" class="Phone_No">
                            <a href="Tel:
                            9176844636">
                            9176844636            </a>
                        </div>

                        <div style="display: none;" class="Member_social">
                            <a href="mailto:prathik.pugazhenthi2018@vitstudent.ac.in">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <a href="https://www.facebook.com/prathik.pugazhenthi/">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/prathik-pugazhenthi-487855177/">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="Board_desc">
                    <div id="Member_Name">
                        PRATHIK
                    </div>
                    <div id="Member_Post">
                        WEB DEVELOPMENT HEAD
                    </div>
                </div>
            </div> 

            <!-- Member 2 row 4 -->

            <div class="member" id="member2">
                <div id="Board_img" onmouseenter="perform(this)"
                onmouseleave="leave(this)">
                    <figure>
                        <img id="Board_member" class="Board_member"
                         src="./assets/Board Members/raaj.jpeg">
                    </figure>

                    <div style="display: none;" class="Board_img_wrapper">

                    </div>
                    <div class="Member_Details">
                        <div style="display: none;" class="Phone_No">
                            <a href="Tel:
                            9198421705">
                            9198421705            
                            </a>
                        </div>

                        <div style="display: none;" class="Member_social">
                            <a href="mailto:raj.dubey2018@vitstudent.ac.in">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=100063262504602">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/raj-dubey-9b9382182">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="Board_desc">
                    <div id="Member_Name">
                        RAJ DUBEY
                    </div>
                    <div id="Member_Post">
                        TECHNICAL HEAD
                    </div>
                </div>
            </div> 

            <!-- Member 3 row 4 -->

            <div class="member end" id="member3">
                <div id="Board_img" onmouseenter="perform(this)"
                onmouseleave="leave(this)">
                    <figure>
                        <img id="Board_member" class="Board_member"
                         src="./assets/Board Members/pramod.jpeg">
                    </figure>

                    <div style="display: none;" class="Board_img_wrapper">

                    </div>
                    <div class="Member_Details">
                        <div style="display: none;" class="Phone_No">
                            <a href="Tel:
                            9003543982">
                            9003543982    
                           </a>
                        </div>

                        <div style="display: none;" class="Member_social">
                            <a href="mailto:pramodkumar.sah2018@vitstudent.ac.in">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <a href="https://www.facebook.com/pramod.sah.773">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/pramod-kumar-6a55841a2">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="Board_desc">
                    <div id="Member_Name">
                        PRAMOD
                    </div>
                    <div id="Member_Post">
                        DESIGN HEAD
                    </div>
                </div>
            </div> 
        </div>
        </div>
        </div>

        <!-- FOOTER DIV -->
        <div id="footer">
            <div id="row">
                <div data-aos="fade-up" id="ClubTagline">
                    <div class="Heading FirstFooter">
                        <h4>HERITAGE CLUB, VIT VELLORE.</h4>
                    </div>
                    <div id="Tagline">
                        <div >
                            Inherit The Heritage
                        </div>
                    </div>
                </div>
                
                <div data-aos="fade-up" id="FollowClub">
                    <div class="Heading Mediatop">
                        <h4>FOLLOW US.</h4>    
                    </div>
                    <div>
                        <ul>
                            <a href="https://www.instagram.com/heritageclubvit">
                                <li>Instagram</li>
                            </a>
                            <a href="https://www.facebook.com/heritageclubvit">
                                <li>Facebook</li>
                            </a>
                            <a href="https://www.linkedin.com/company/heritage-club-vit/">
                                <li>LinkedIn</li>
                            </a>
                        </ul>
                    </div>
                </div>
    
                <div data-aos="fade-up" id="Subscribe">
                    <div class="Heading Mediatop">
                        <h4>GET NOTIFIED.</h4>
                    </div>
                    <div id="notified">
                        <div id="content">
                            Get latest updates of activities of Heritage.
                        </div>
                        <div  id="SubscribeForm">
                            <form method="POST">
                                <div>
                                    <input type="email" placeholder="type email" name="mail" required >
                                </div>
                                <div>
                                    <button type="submit">
                                        <i class="far fa-envelope"></i>
                                    </button>
                                </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Copyrights">
                With love <a href="">
                    <span> Heritage Club, VIT Vellore</span>
                </a>
                </span>
            </div>
        </div>

    </body>
    <script>
        AOS.init({
            duration:500,
            offset:140,
            easing:"ease-in-out"
        })
    </script>
    <script src="./jquery-3.6.0.js"></script>
    <script src="./script.js"></script>
</html>