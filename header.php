<?php
    session_start(); 
?>
<head>
    <title>To The Person Reading This</title>
    <link rel ="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "resources/css/style.css" type = "text/css" rel = "stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2b9334b28.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="#" />
</head>


<body>
    <div class = "header">
        <nav>
            <div class = "logo">
                <a href="index.php"><img class="logo-img" src="resources/css/logo.png"></a>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

            <ul class = "nav-links">
                <div class="link1">
                    <li><a href="index.php">Home</a></li>
                </div>
                <div class="link2">
                    <li><a href="about-us.php">About Me</a></li>
                </div>
                <li><a href="mental-health-support.php">Mental Health Support</a></li>
                <?php
                if (isset($_SESSION["username"])){
                    echo '<li><a href="dashboard.php">Dashboard</a></li>';
                    echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
                }
                else{

                }
                ?>
            </ul>  
            <div class="social-links">
                <ul class = "social">
                    <li><a href="http://instagram.com/TheArt4change" class="fa fa-instagram"></a></li>
                    <li><a href="http://facebook.com/TheArt4Change" class="fa fa-facebook"></a></li>
                    <li><a href="http://tiktok.com/@theart4change" class="fab fa-tiktok"></a></li>
                    <li><a href="http://pinterest.ca/theart4change" class="fa fa-pinterest"></a></li>
                </ul>
            </div>
        </nav>
    </div>
    
    <script>
        const navSlide = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');
            const navLinks = document.querySelectorAll('.nav-links li');            

            burger.addEventListener('click', () => {
                nav.classList.toggle('nav-active');

                navLinks.forEach((link,index)=>{
                    if (link.style.animation){
                        link.style.animation = '';
                    } 
                    else {
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + 0.5}s`;
                    }
                });

                //burger animation
                burger.classList.toggle('burger-toggle');
            });
            
        }
        navSlide();
    </script>   
    
