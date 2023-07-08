<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple</title>
    <link rel="icon" href="./img/apple title.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        a#log {
            text-decoration: none;
            color: rgba(255, 255, 255,0.7);
        }
    </style>
</head>

<body>
    <div class="nav">
        <ul class="topics">
            <li class="sub"><i class="fa fa-apple hello"></i></li>
            <li class="sub"><a href="mac.html">Mac</a></li>
            <li class="sub"><a href=" ">Watch</a></li>
            <li class="sub"><a href="iPad.html">iPad</a></li>
            <li class="sub"><a href=" ">AirPods</a></li>
            <li class="sub"><a href="iphone.html">iPhone</li>

            <li class="sub">Support</li>
            <li class="sub"><a href="login/login.php" id="log">logout</a></li>
            <li class="sub"><i class="fa fa-search hello"></i></li>
            <li class="sub"><i class="fa fa-shopping-bag hello"></i></li>
        </ul>
    </div>
    <div class="announcement">
        <h2>Introducing the new <br>MacBook Air 15” <br>iPhone 15 Pro</h2>

        <button class="play-button">Watch the announcement&nbsp;<i class="fa play"></i>
        </button>
    </div>
    <div class="mac">
        <h2 style="font-size: 56px;">MacBook Air</h2>
        <p style="font-size: 28px;">Super Charged by M2 Pro Chip</p>
        <p style="font-size: 21px; color: #667;">Available starting 1.24</p>
        <a href="#" style="margin-right: 30px;">Learn More</a><a href="#">Order Now</a>
        <img src="img\macbook-pro removebg.png" alt="macbook pro">
        <video autoplay loop muted plays-inline>
            <source src="img\black1_mac.mp4" type="video/mp4">
        </video>
    </div>
    <div class="mac-mini">
        <h2 style="font-size: 56px;">Mac mini</h2>
        <p style="font-size: 28px;">Super charged by M2 and M2 Pro</p>
        <p style="font-size: 21px; color: #667;">Available starting 1.24</p>
        <a href="#" style="margin-right: 30px;">Learn More</a><a href="#">Order Now</a>
        <img src="./img/mac-mini" alt="mac mini">
    </div>
    <div class="homepod">
        <h2 style="font-size: 56px;">iPhone 14 Pro</h2>
        <p style="font-size: 28px;">Pro. Beyond.</p>
        <p style="font-size: 21px; color: #667;">Available starting 2.3</p>
        <a href="#" style="margin-right: 30px;">Learn More</a><a href="#">Order Now</a>
        <video autoplay loop muted plays-inline>
            <source src="img\large_2x.mp4" type="video/mp4">
        </video>
    </div>

    <div class="ipad">
        <h2 style="font-size: 56px;">iPad Pro</h2>
        <p1 style="font-size: 28px; margin-top: -45px; line-height: 1;">Supercharged by</p1>
        <br>
        <a href="#" style="margin-right: 30px;">Learn More</a><a href="#">Buy</a>
        <img src="./img/performance_hero__cxya4f2p5euu_large.jpg" alt="macbook pro">
        <video autoplay loop muted plays-inline>
            <source src="img\iPad_large.mp4" type="video/mp4">
        </video>
    </div>

    <div class="watch">
        <h2 style="font-size: 56px;">Creativity and <br>community. <br>Woven together</h2>
        <p style="font-size: 28px;">Explore the new Black Unity watch<br>Band and matching Face</p>
        <a href="#" style="margin-right: 30px;">Learn More</a><a href="#">Buy</a>
        <img src="./img/Apple-Watch" alt="macbook pro">
    </div>

    <div class="watch1">
        <h2 style="font-size: 56px;"><i class="fa fa-apple"></i>&nbsp;Watch</h2>
        <p1 style="font-size: 28px; margin-top: -45px;">Series 8</p1>
        <p style="font-size: 28px;">A healthy leap ahead</p>
        <a href="#" style="margin-right: 30px;">Learn More</a><a href="#">Order Now</a>
        <img src="./img/gps-lte__de35dernyje6_og.png" alt="macbook pro">
    </div>
    <div class="iphone-pro">
        <h2 style="font-size: 56px;">iPhone 14 Pro</h2>
        <p style="font-size: 28px;">Pro and beyond</p>
        <a href="#" style="margin-right: 30px;">Learn More</a><a href="#">Buy</a>
        <img src="./img/Apple-iPhone-14-Pro-iPhone-14-Pro-Max-hero-220907.jpg.og.jpg" alt="macbook pro">
    </div>
    <div class="iphone">
        <h2 style="font-size: 56px;">iPhone 14</h2>
        <p style="font-size: 28px;">Big and bigger</p>
        <a href="#" style="margin-right: 30px;">Learn More</a><a href="#">Order Now</a>
        <img src="./img/Apple-iPhone-14.jpg" alt="macbook pro">
    </div>


    <div class="privacy">
        <h2 style="font-size: 56px;"><i class="fa fa-apple"></i>&nbsp;Privacy</h2>
        <p style="font-size: 28px; color: red; margin-top: -45px;">How iPhone helps <br> protect your privacy</p>
        <p style="font-size: 28px;">Watch the film &nbsp;<i class="fa play">&#xf144;</i></p>
        <img src="./img/gps-lte__de35dernyje6_og.png" alt="macbook pro">
    </div>
    <div class="credits">Designed By Yash Mane&nbsp;&copy;</div>
</body>

</html>