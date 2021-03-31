<?php

$login=false;
$showerror=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){


      include 'partials/_db_connect.php';


    
    $email = $_POST["email"];
    $password = $_POST["password"];

 
    
        $sql="select * from user where email='$email' AND password='$password' ";

        $result=mysqli_query($conn, $sql);
        $num= mysqli_num_rows($result);
          if($num== 1){
              $login=true;
              
              session_start();
              $_SESSION['loggedin']= true;
              $_SESSION['name']= $name;

              header("location:index.php");

          }
          else{
              $showerror="Invalid credencials";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login</title>

    <style>
    .btn {
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

  if($login){
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Success!</strong> you are logged in. 
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if($showerror){
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error ! </strong> ' .$showerror.'
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
 

?>



    <div class="container col-md-4 my-5" styel="height:50vh;">


        <div class="card" style="width: 25rem;">

            <div class="card-body">

                <h2 class="text-center my-3" style="color:#005450;">Blood </h2>
                <p class=" text-center my-3">Please log in to your Blood account</p>


                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleinputnumber" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-success" style="margin-bottom:20px;">LogIn</button>
                </form>

                <a href="signup.php">If You are new  on Blood website click here</a>


            </div>
        </div>





    </div>

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