


<?php

$showalert=false;
$showerror=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){


      include 'partials/_db_connect.php';


    $user_name = $_POST["name"];
    $blood_group = $_POST["blood_group"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $pin_code = $_POST["pin_code"];
    $mobile_number = $_POST["mobile_number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $exits=false;
      if(($password == $cpassword) && $exits==false){
          $sql="INSERT INTO `user` ( `name`, `blood_group`, `address`, `state`, `pin_code`, 
          `mobile_number`, `email`, `password`, `date`) VALUES ( '$user_name', '$blood_group', '$address', '$state', 
          '$pin_code', '$mobile_number', '$email', '$password', current_timestamp())";

          $result=mysqli_query($conn, $sql);

          if($result){
              $showalert=true;
          }

      header("location: login.php");

      }
      else{
        $showerror="password do not match";
      }


 

  
} 


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>SignUp</title>



    <style>
    
    .btn{
        font-size: 15px;
        font-weight: 600;
         color: #fff;
            background: #005450;
            border: 2px solid #005450;
            border-radius: 50px;
            padding: 10px 20px;
            transition: all 0.5s ease;
            text-decoration: none;
            margin-right: 20px;
    }
    
    </style>
    
      </head>
  <body>

  <?php
  if($showalert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> You are sign up 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

  }
  if($showerror){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>' . $showerror . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

  }
  ?>

<div class="container col-md-4 my-5" styel="height:50vh;">


<div class="card" style="width: 25rem;">

  <div class="card-body">
   
   <h2 class="text-center my-3" style="color:#005450;">Blood </h2>
   <p class=" text-center my-3"> It just takes a few minutes to sign up and get fast, easy access to care.</p>
   


 
   <form action="signup.php" method="post">
  <div class="mb-3">
    <label for="exampleinputnumber"  class="form-label"> Your Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputnumber" Required aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleinputblood"  class="form-label"> Blood Group</label>
    <input type="text" class="form-control" name="blood_group" id="exampleInputblood" placeholder=" A / B / AB / O" Required aria-describedby="emailHelp">
  </div>
  <div class="mb-3 col-md-12 " >
  
    <div class="address py-2" style="display:flex;" >
        <div class="address-1" style="margin-right:10px; " >
            <label for="exampleinputnumber"  class="form-label "> Address</label>
                <input type="text" class="form-control " name="address" id="exampleInputEmail1" Required aria-describedby="emailHelp">
        </div>        
        <div class="address-1">
            <label for="exampleinputnumber"  class="form-label ">State</label>
                <input type="text" class="form-control " name="state" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>        
            
        
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleinputnumber"  class="form-label">Pin code</label>
    <input type="text" class="form-control" name="pin_code" id="exampleInputEmail1" Required aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleinputnumber"  class="form-label">Mobile Number</label>
    <input type="text" class="form-control" name="mobile_number" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleinputnumber"  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control"  name="cpassword" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-success" style="margin-bottom:20px;" >SignUp</button>
</form>


<a href="login.php" >Your have already a account! </a>


</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>