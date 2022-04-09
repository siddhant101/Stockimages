<?php

$login = false;
$showError = false; 
if($_SERVER["REQUEST0
 _METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
  
   
 
        $sql ="Select * from users where username ='$username' AND password = '$password'" ;

         $result = mysqli_query($conn, $sql); 
         $num = mysqli_num_rows($result);
         
         if ($num == 1 ){
             $login = true;
             session_start();
             $_SESSION['loggedin'] = true;
             $_SESSION['username'] = $username;
             header("location: welcome.php");



         }

        }

    else{
        $login="invalied";
       }
             

  
 
   
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
   <?php require 'partials/_nav.php'?>

   <!--?php 
   if ($login){
   echo'
   <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>sucessfull </strong> you are loggedin
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
';}
   if ($showError){
   echo'
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>someting weant wrong </strong> '. $showError.'
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
';
}
?-->


   

   
  


</div>


   <div class="container my4">
       <h1 class="text-center">Signup to our website </h1>

   <form action="/loginsystem/login.php" method="POST">
        <div class="form-group">
            <label for="username" >Username</label>
            <input type="text"  class="form-control" id="username" name="username" >
            
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>

         
        <button type="submit" class="btn btn-primary">login</button>
     </form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>