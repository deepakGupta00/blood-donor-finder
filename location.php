<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>

 .search-botton  {
  margin-top: 100px;
  text-align:center;
  margin-bottom: 50px;

}
    .search-botton a {
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        background: #005450;
        border: 2px solid #005450;
        border-radius: 50px;
        padding: 15px 25px;
        transition: all 0.5s ease;
        text-decoration: none;
        text-align:center;
    }

    .search-botton a:hover {
        background-color: transparent;
        color: #005450;
    }
    </style>

</head>

<body>


    <div class="container" style="height:100vh;">


        <?php

include("partials/header.php");

include 'partials/_db_connect.php';

?>





        <div class="mb-3 "
            style="padding-top:100px  ; height:30vh;  text-align:center; top: 0%; left: 0%; outline:none; transform:translate(0%, 20%)  ">
            <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
            <!-- <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="Search" style="font-size:25px; font-weight:500; padding:20px; width:70%; outline:none; border:none; border-bottom:2px solid #838383;"   > <i class="fa fa-search" aria-hidden="true"> </i>  -->

            <h1 style="border-bottom:2px solid #eeeeee; ">Donor available on this Locations</h1>

        </div>
        <div class="search-botton" >
            <a href="search.php">Search Doner with blood group</a>
        </div>
        <!-- locations -->

        <div class="content">
            <table class="table table-striped">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Address</th>
                            <th scope="col">State</th>
                            <th scope="col">Pin Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="row ">
                            <?php 
      include 'partials/_db_connect.php';

        //  $id=$_GET['threadid'];
        $sql="SELECT * FROM `user`   ";  
        $result=mysqli_query( $conn, $sql);

        $noresult=true;

 while($row= mysqli_fetch_assoc($result)){
     if($row){

     $noresult=false;
       
     

    
     $address = $row["address"];
     $state = $row["state"];
     $pin_code = $row["pin_code"];
                            
 

     echo ' <tr>
            
               <th scope="row">*</th>
                  <td>'. $address.'</td>
                  <td>'.  $state .'</td>
                <td>'. $pin_code .'</td>
             
             
            </tr>';
     }  
     
      

 }
 

 
    ?>

                        </div>



                    </tbody>

                </table>
            </table>

        </div>

    </div>


    <?php
include("partials/footer.php");
?>




</body>

</html>






<!-- content: 'play with me';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); -->