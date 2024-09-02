<html>
<head>
    <title>feature</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width =device-width, intial-scale =1">
    <script src="https://cdn.jsdeliver.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    </head>
    <body>
        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="Features.html">FEATURES</a></li>
                    <li><a href="image.html">IMAGE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="about.html">ABOUT</a></li>
    
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
        <div id="menuBtn">
            <img src="images/menu.jpg" id="menu">
        </div>
    
        <section id="feature">
            <div class="title-text">
                <p>FEATURES</p>
                <h1>Why Choose Us</h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>Experienced Staff</h1>
                    <div class="features-desc">
                        
                       <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                       </div>
                        <div class="feature-text"></div>
                            <p> DEDICATED DESIGN DESIGN DUO GRAPHICS GOLD</p>
                    </div>
                </div>
                <div class="features-img">
                    <img src="images/oo.png">
                    
                </div>
            </div>
            
        </section>
        

</body>

</html>
