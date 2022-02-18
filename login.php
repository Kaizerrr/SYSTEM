<?php
require_once('connect.php');

if(isset($_POST['submit'])){ 
    $queryfire = '1';
    $userEmail=$_POST['userEmail'];
    $userPass = $_POST['userPass'];
    $login_query ="SELECT * from users WHERE userEmail='$userEmail' AND userPass='$userPass' ";

    $result = mysqli_query($dbc, $login_query);

    if($queryfire && mysqli_num_rows($result)){
        echo "<script>alert('You are Successfully logged in');</script>";
        include("index.html");
       
    }
    
    else{ 
        echo "<script>alert('Email and Password is incorrect!')</script>";
        include("login.html");
        exit;
    }
    
}
 ?>

 