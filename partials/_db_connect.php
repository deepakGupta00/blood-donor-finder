

<?php

$server= "localhost";
$username="root";
$password="";
$database="blood_bank";


// $conn=mysqli_connect('localhost', 'root','', 'company');

$conn= mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die ("error" .mysqli_connect_error());
}

?>