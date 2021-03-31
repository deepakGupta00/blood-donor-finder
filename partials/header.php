


<html>

<head>
<title>Blood  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="stylesheet" href="css/animate.css"> -->

    <link rel="stylesheet" href="style.css" />

    <!-- <link rel="stylesheet" href="css/particles.css"> -->

    <style>
    header {
        align-items: center;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        z-index: 2;
        padding: 20px 20px;
        background-color: #edf5f7;
        /* background-color: #ffffff; */
    }

    header .container {
        -webkit-display: flex;
        display: flex;
        justify-content: space-between;
        /* align-items:center; */
    }

    header .container .nav-box {
        display: flex;
        text-decoration: none;
        /* justify-content: space-between; */
        font-family: "Poppins", sans-serif;
        align-items: center;
        flex-wrap: wrap;
    }

    header .container a {
        text-decoration: none;
    }

    header .container .nav-box .box {
        /* float: right;     */
        display: flex;
        text-decoration: none;
        /* justify-content: space-between; */
        font-family: "Poppins", sans-serif;
        align-items: center;
        flex-wrap: wrap;
    }

    header .container .box a {
        margin-right: 40px;
    }

    header .container a h4 {
        font-size: 13px;
        font-weight: 500;
    }

    header .container .get-touch {}

    header .container .location a {
        font-size: 15px;
        font-weight: 600;
        color: #005450;
        /* background:#005450; */
        /* border: 2px solid #005450; */
        /* border-radius: 20px; */
        padding: 10px 15px;
        transition: all 0.5s ease;
    }

    header .container .login a {
        font-size: 12px;
        font-weight: 600;
        color: #005450;
        /* background:#005450; */
        border: 2px solid #005450;
        border-radius: 20px;
        padding: 10px 15px;
        transition: all 0.5s ease;
    }

    header .container .login a:hover {
        /* background-color: transparent ; */
        color: #ffffff;
        background: #005450;
    }

    header .container .signup a {
        font-size: 12px;
        font-weight: 600;
        color: #fff;
        background: #005450;
        border: 2px solid #005450;
        border-radius: 20px;
        padding: 10px 15px;
        transition: all 0.5s ease;
    }

    header .container .signup a:hover {
        background-color: transparent;
        color: #005450;
    }

    header .container .logo {
        /* align-items: center; */

        color: black;
        font-size: 25px;
        font-weight: 500;
    }

    header .container .logo a {
        color: #222;
    }

    header .container .search a i {
        padding-right: 50px;
        font-size: 20px;
        font-weight: 500;
        cursor: pointer;
        color: #1E6865;

    }

    header .container .ham-burger {
        transform: translate(-50px);
        position: relative;
        display: inline-block;
        color: black;
        z-index: 100;
    }

    header .container .ham-burger span {
        height: 3px;
        margin-bottom: 8px;
        display: block;
        background: #222;
        width: 30px;
        transition: transform 0.5s ease;
        text-align: center;
    }

    header .container .nav {
        position: fixed;
        background-color: #005450;
        width: 400px;
        top: 0;
        right: 0;
        height: 100%;
        z-index: 99;
        padding: 100px 0px 15px 50px;
        transform: translateX(100%);
        transition: transform 1s ease;
    }

    header .nav.open {
        transform: translateX(0);
        color: #f7f3f0;
    }

    header .ham-burger span.color {
        background-color: #f7f3f0;
    }

    header .container .nav ul li {
        /* margin-bottom: 30px; */
        list-style: none;
    }

    header .container .nav ul li a {
        text-decoration: none;
        display: block;
        font-family: Georgia, "Times New Roman", Times, serif;
        font-size: 45px;
        font-weight: 600;
        color: #f7f3f0;
        padding: 10px;
    }

    header .container .nav ul li a::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 70px;
        height: 3px;
        width: 0%;
        background-color: #f7f3f0;
        transition: all 0.5s ease;
        z-index: 101;
    }

    header .container .nav ul li a.hover::before {
        left: 0;
        width: 100%;
    }

    header .container .nav ul li a.active::before {
        left: 0;
        width: 100%;
    }

    header .container .ham-burger span:nth-child(1) {
        transform-origin: left top;
    }

    header .container .ham-burger span:nth-child(2) {
        transform-origin: left bottom;
    }

    header .container .ham-burger.active span:nth-child(1) {
        transform: rotate(53deg) translateY(-10px);
    }

    header .container .ham-burger.active span:nth-child(2) {
        transform: rotate(-53deg) translateY(10px);
    }

    header .container .nav ul li a span {
        font-size: 15px;
        font-weight: 400;
    }

    header .container .nav ul li:nth-child(1) {
        padding: 10px 10px 10px 10px;
    }

    header .container .nav ul li:nth-child(2) {
        padding: 10px 10px 10px 100px;
    }

    header .container .nav ul li:nth-child(3) {
        padding: 10px 10px 10px 10px;
    }

    header .container .nav ul li:nth-child(4) {
        padding: 10px 10px 10px 100px;
    }

    header .container .nav ul li:nth-child(5) {
        padding: 10px 10px 10px 10px;
    }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="nav-box">
                <div class="logo">
                    <h4><a href="index.php"> BLOOD </a></h4>
                </div>
            </div>
            <!-- <div class="get-touch">
                <a href="#">Get in touch</a>
            </div> -->

            <div class="nav-box">
                <div class="box">
                    <div class="location">
                        <a href="location.php">Locations</a>
                    </div>
                    <?php
                   
                if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] =true){
                  echo '<div class="login">
                          <a href="logout.php">Log out</a>
                        </div>';
                 
                }
                else{ 
                  echo  '<div class="login">
                            <a href="login.php">Log in</a>
                          </div>
                    <div class="signup">
                        <a href="signup.php">Sign Up</a>
                    </div>';
                }
                   
            ?>

                    <div class="search">
                        <a href="search.php"> <i class="fa fa-search" aria-hidden="true"> </i> </a>
                    </div>
                </div>
                <a href="javascript:void(0)" class="ham-burger">
                    <span></span>
                    <span></span>
                </a>
            </div>

            <div class="nav">
                <ul>
                    <li>
                        <a href="#home"> <span>(01)</span> Home</a>
                    </li>
                    <li>
                        <a href="#about"> <span>(02)</span> About Us</a>
                    </li>
                    <li>
                        <a href="#service"> <span>(03)</span> Services</a>
                    </li>
                    <li>
                        <a href="#parters"> <span>(04)</span> Partners</a>
                    </li>
                    <li>
                        <a href="#contact"> <span>(05)</span> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".ham-burger, .nav ul li a").click(function() {
            $(".nav").toggleClass("open");
            $(".ham-burger").toggleClass("active");

            $(".ham-burger span").toggleClass("color");
        });
        // $(".accordian-container").click(function () {
        //     $(".accordian-container").children(".body").slideUp();
        //     $(".accordian-container").removeClass("active")
        //     $(".accordian-container").children(".head").children("span")
        //         .removeClass("fa-angle-down").addClass("fa-angle-up")
        //     $(this).children(".body").slideDown();
        //     $(this).addClass("active")
        //     $(this).children(".head").children("span").removeClass
        //         ("fa-angle-up").addClass("fa-angle-down")
        // })
    });

    // mouse move

    // const pos = document.documentElement;
    // pos.addEventListener('mousemove', e => {
    //     pos.style.setProperty('--x', e.clientX + 'px');
    //     pos.style.setProperty('--y', e.clientY + 'px');
    // })
    </script>



</body>

</html>