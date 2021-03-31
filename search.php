<?php

session_start();



?>
 <!-- <?php

$search=false;
// $searchError=false;


if($_SERVER["REQUEST_METHOD"]=="GET"){

      include 'partials/_db_connect.php';


    $blood_group = $_GET["blood_group"];
    $state = $_GET["state"];
    


      $sql="SELECT * FROM `user` where blood_group='$blood_group' AND state= '$state' ";
                $result=mysqli_query( $conn, $sql);
                while($row= mysqli_fetch_assoc($result)){
                    
              
                    
                $search=true;

                $name= $row['name'];
                $blood_group= $row['blood_group'];
                $address = $row["address"];
                $state = $row["state"];
                $pin_code = $row["pin_code"];
                $mobile_number= $row["mobile_number"];
               
                          
                          
               }
              
              
            }
            else{
                echo 'not get';
            }

        
        
?>  -->





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

if($search){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your blood group and state both are request find . 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
// if(!$search){
// echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
// <strong>Success!</strong> Your blood group match only  . 
// <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }





?>


    <div class="container col-md-4 my-5" styel="height:50vh;">


        <div class="card" style="width: 25rem; margin-bottom:100px;">

            <div class="card-body">

                <h2 class="text-center my-3" style="color:#005450;">Search Blood donor </h2>
                <p class=" text-center my-3">Search Blood group and your state </p>

                <form action="search.php" method="get">
                    <div class="mb-3">
                        <label for="exampleinputnumber" class="form-label "> Blood group <span style="color:red;"> *
                            </span></label>
                        <input type="text" class="form-control " name="blood_group" id="exampleInputEmail1" Required
                            aria-describedby="emailHelp">
                        <div class="mb-3">
                            <label for="exampleinputnumber" class="form-label ">State </label>
                            <input type="text" class="form-control " name="state" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-bottom:20px;">Search</button>
                </form>


                <a href="index.php">Go To Home Page</a>


            </div>
        </div>





    </div>


    <div class="container" style="min-height:50vh;">
        <?php
if($search){
       echo ' <h4 class="text-center  " style="border-bottom:2px solid #838383; margin-bottom:25px;">
            Search result for Blood Group "<em>   ' . $blood_group .' </em>" and Doner state "<em>
            '. $state .'  </em>" both are request find </h4>';
}  
else{
    echo ' <h4 class="text-center  " style="border-bottom:2px solid #838383; margin-bottom:25px;">
            Search result for Blood Group "<em>   ' . $blood_group .' </em>" find  only  and Doner in  "<em>
            '.$state.' </em>" not find  .</h4>';
}     
?>




        <table class="table table-striped">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Address</th>
                        <th scope="col">State</th>
                        <th scope="col">Pin Code</th>
                        <th scope="col">Mobile Number</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="row ">
                        <?php 
      include 'partials/_db_connect.php';

        //  $id=$_GET['threadid'];
        $sql="SELECT * FROM `user` where blood_group= '$blood_group'   ";  //AND state='$state'
        $result=mysqli_query( $conn, $sql);

        $noresult=true;

 while($row= mysqli_fetch_assoc($result)){
     if($row){

     $noresult=false;
       
     

     $name= $row['name'];
     $blood_group= $row['blood_group'];
     $address = $row["address"];
     $state = $row["state"];
     $pin_code = $row["pin_code"];
     $mobile_number= $row["mobile_number"];
                            
 

     echo ' <tr>
            
               <th scope="row">*</th>
                  <td> '. $name .'</td>
                  <td>'. $blood_group.'</td>
                  <td>'. $address.'</td>
                  <td>'.  $state .'</td>
                <td>'. $pin_code .'</td>
                 <td>'. $mobile_number .'</td>
             
             
            </tr>';
     }  
     
      

 }
 if($noresult){
    echo '<b><div class="jumbotron jumbotron-fluid bg-light my-4 py-4  "  >
<div class="container" >
<h1 class="display-6">No Results Found</h1>
<p class="lead">Sorry ....</p>
</div>
</div></b>';
}
// else{
//         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//         <strong>Success!</strong> Your request find. 
//         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//         </div>';
        
// }

 
    ?>

                    </div>



                </tbody>

            </table>
        </table>

    </div>
    <?php

        include("partials/footer.php");

    ?>

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