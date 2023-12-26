<html>

<head>
    <title>
        Internship Survey
    </title>
    <!-- Bootstrap links -->
    <link rel="stylesheet" href="slidercss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="header" id="section1">
        <nav>
            <!-- logo class -->
            <div class="logo">
                <a href=""><img src="img/IS.png" width="20%"></a>
            </div>
            <!-- survey Button -->
            <div class="text-box">
                <a href="login.php" class="hero-btn"><b>Take Survey</b></a>
            </div>
            <!-- navigation links -->
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php" id="hm"><strong>HOME</strong></a></li>
                    <li><a href="result.php"><strong>RESULTS</strong></a></li>
                    <li><a href="contact.php"><strong>CONTACT US</strong></a></li>
                    <li><a href="login.php"><strong>LOGIN</strong></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </div>

    <div class="hero">
        <h1>Internship Survey</h1>
        <div class="container">
            <div class="indicator">
                <span class="btn active"></span>
                <span class="btn"></span>
                <span class="btn"></span>
                <span class="btn"></span>
            </div>
                <!-- slides -->
            <div class="slider">
                <div class="slide-row" id="slide">
                    <div class="slide-col">
                        <div class="user-text">
                            <p>
                                TU - DU Internship program is a month long training on web development for the students of Tongmyong University and the University of Delhi. 
                            </p>
                        </div>
                        <div class="user-img">
                            <img src="img/tomy2.jpg">
                        </div>
                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>
                                The collaborative event is sponsored  by the IITP, Ministry of Science and Technology, Government of Korea and Tongmyong University.
                            </p>
                        </div>
                        <div class="user-img">
                            <img src="img/DU build.jpg">
                        </div>
                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>
                                Students will get to know much about web development and would also create a project by the end of the program on the assigned topic. 
                            </p>
                        </div>
                        <div class="user-img">
                            <img src="img/meta_img_logo (1).jpg">
                        </div>
                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>
                                The program has been planned to strengthen the relationship between the two universities as well as to motivate the students and to be beneficial for them.
                            </p>
                        </div>
                        <div class="user-img">
                            <img src="img/DU100.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer social media links -->
    <section class="footer">


        <div class="icons">
            <b>Social Media Handles</b>
            <a href="https://www.facebook.com/UniversityofDelhi"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/univofdelhi"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/univofdelhi/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    </section>

    <script>
        // on mouse hovering slides
        var btn = document.getElementsByClassName("btn");
        var slide = document.getElementById("slide");
        btn[0].onmouseover = function () {
            slide.style.transform = "translateX(0px)";
            for (i = 0; i < 4; i++) {
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[1].onmouseover= function () {
            slide.style.transform = "translateX(-800px)";
            for (i = 0; i < 4; i++) {
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[2].onmouseover = function () {
            slide.style.transform = "translateX(-1600px)";
            for (i = 0; i < 4; i++) {
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[3].onmouseover = function () {
            slide.style.transform = "translateX(-2400px)";
            for (i = 0; i < 4; i++) {
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
    </script>
</body>

</html>