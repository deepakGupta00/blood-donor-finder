<?php

session_start();

if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin']!=true){
    header("location:login.php");

    exit;
}

?>


<!-- <!DOCTYPE html> -->

<!doctype html>
<html lang="en">

<head>





<title>Blood </title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="stylesheet" href="css/animate.css"> -->

    <link rel="stylesheet" href="style.css" />


</head>

<body>

    <?php
include("partials/header.php");

include 'partials/_db_connect.php';

?>
    <section class="home">
        <div class="conatiner">
            <div class="content">
                <div class="box">
                    <h1>Donate blood, <br> save life! <br> </h1>
                    <P>An award wining digital platform where find blood donors.</P>
                    <div class="signup">
                        <a href="signup.php">Sign up today</a>
                        <!-- </div>

            <div class="register"> -->
                        <a href="search.php">Search Doner</a>
                    </div>
                </div>
                <div class="box">
                    <div class="img">
                        <img src="image/blood-doc.png" alt="image">
                    </div>
                </div>

                <!-- go down -->

                <a href="#about" class="go-down">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- go down -->


            </div>
        </div>
    </section>

    <!-- about -->

    <section class="about" id="about">
        <div class="container">
            <div class="content">

                <h1>Get care yourself and other</h1>
                <h2>from blood Donate</h2>
                <h3>Be A Member Of our Organization</h3>



                <!-- <div class="box"> -->

                <h5>Donation Process</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,
                    type and scrambled it to make a type specimen book.</p>

                <div class="box">


                    <div class="text ">

                        <h2>01</h2>
                        <h3><span> Registration</span> </h3>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, type and scrambled it to make a type specimen book.
                        </p>
                        <div class="img">
                            <img src="image/blood-donation.png">
                        </div>

                    </div>
                    <div class="text ">

                        <h2>02</h2>
                        <h3><span>Call You </span> </h3>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, type and scrambled it to make a type specimen book.
                            .</p>
                        <div class="img">
                            <img src="image/phone.png" alt="image">

                        </div>

                    </div>
                    <div class="text ">


                        <h2>03</h2>
                        <h3><span>Refreshment </span> </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, type and scrambled it to make a type specimen book.
                        </p>
                        <div class="img">
                            <img src="image/heart.png" alt="image">
                        </div>

                    </div>


                </div>
            </div>

        </div>


    </section>



    <!-- contact -->

   
<section class="contact" id="contact">
	<div class="container">
		<div class="content">
			
			<!-- <h1>Contact</h1> -->
			<div class="box">

				<div class="box-text">
					<img src="image/msg.png" sizes="(max-width: 479px) 60px, (max-width: 767px) 40px, (max-width: 991px) 70px, (max-width: 1919px) 180px, 1vw" 
			srcset="https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message-p-500.png 500w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message-p-800.png 800w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message.png 1000w"
			 alt="" class="contact-element-3">
					<h1>Hello! 👋<br>
						I'm glad that you're here! </h1>
						<img src="image/ring.svg" sizes="(max-width: 479px) 40px, (max-width: 767px) 30px, (max-width: 991px) 50px, (max-width: 1919px) 100px, 1vw" 
						srcset="image/ring.svg 500w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message-p-800.png 800w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message.png 1000w"
						 alt="" class="contact-element-3">		
				</div>
				<div class="box-text">
					<img src="image/telegram.png" sizes="(max-width: 479px) 40px, (max-width: 767px) 30px, (max-width: 991px) 50px, (max-width: 1919px) 70px, 1vw" 
						srcset="image/telegram.png 500w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message-p-800.png 800w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message.png 1000w"
						 alt="" class="contact-element-3">
					<div class="box-contact">
						
						<form >
							<input type="text" name="name" placeholder="Your Name">
							<input type="email" name="email" placeholder="Your Email">
							<!-- <label for="msg">Tell us more about your project. How can I help ?</label> -->
							<p>Tell us more about your project. How can I help ?</p>
							<textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
							<button>Send</button>
							<button> <i class="fa fa-whatsapp" aria-hidden="true"> +91 7081869647</i>  </button>
							
						</form>

					</div>
					<img src="image/spare.svg" sizes="(max-width: 479px) 40px, (max-width: 767px) 30px, (max-width: 991px) 50px, (max-width: 1919px) 40px, 1vw" 
						srcset="image/spare.svg 500w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message-p-800.png 800w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message.png 1000w"
						 alt="" class="contact-element-3 center" >

				</div>
			</div>
		</div>
	</div>
</section>

    <!-- copy-right -->

    <?php
include("partials/footer.php");
?>


    <!-- <section class="copy-right">
	<div class="container">
		 © 2020 - <?php echo date("Y"); ?> All Right Reserve by Blood || Create by Deepak
		 

	</div>
</section> -->



    <!-- <section class="copy-right "  >
       <h5> &copy; All Right Reserve 2020- <?php  echo date("Y");  ?> </h5>
</section> -->

    <!-- <section class="copy-right">
        <div class="container">
            © All Right Reserve 2020 - <?php echo date(""); ?> by Deepak


        </div>
    </section> -->





    <!-- <button onclick="window.print()">Print this page</button> -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>