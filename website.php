<html>
<head>
<title> Graphic Design </title>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width =device-width, intial-scale =1">
<script src="https://cdn.jsdeliver.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
    <section id="banner">
        <img src="images/pu.jpg" class="logo">
        <div class="bannertext">
            <h1> Krishna Graphics</h1>
            <p>producing a mental picture through clear and impressive description</p>
            <div class="banner-btn">
                <a href="#"><span></span>Find out</a>
                <a href="#"><span></span>Read more</a>
            </div>
        </div>
    </section>
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="form.php">HOME</a></li>
                <li><a href="Features.php">FEATURES</a></li>
                <li><a href="image.php">IMAGE</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="about.php">ABOUT</a></li>

            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.jpg" id="menu">
    </div>
    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu    = document.getElementById("menu")

        sideNav.style.right  ="-250px"

        menuBtn.onclick = function()
        {
            if(sideNav.style.right  =="-250px"){
                sideNav.style.right ="0";
                menu.src = "images/cf.png";
            }
            else {
                sideNav.style.right ="-250px";
                menu.src ="images/menu.jpg";
            }
       }
       var scroll=new SmoothScroll('a[href*="#"]',{
        speed:1000,
        speedAsDuration:true
       });
    </script>

</body>

</html>
