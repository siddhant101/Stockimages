<?php

$showAlert = false;
$showError = false; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword =$_POST["cpassword"];
    $exists=false;
    if(($passsword = $cpassword) && $exists == false){
        $sql =" INSERT INTO `users` ( `Username`, `password`, `date`)
         VALUES ( '$password', '$cpassword', current_timestamp())";
         $result = mysqli_query($conn, $sql); 
         
         if ($result){
             $showAlert = true;
         }

    }

    else{
       $showError ="Password do not match"; 
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>
   <?php require 'partials/_nav.php'?>

   <?php 
   if ($showAlert){
   echo'
   <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>sucessfull </strong> 
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
?>


   

   
  


</div>


   <div class="container my4">
       <h1 class="text-center">Signup to our website </h1>

   <form action="/loginsystem/signup.php" method="post">
        <div class="form-group">
            <label for="username" >Username</label>
            <input type="text"  class="form-control" id="username" name="username" >
            
        </div>

        <!--div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" name="age" >
            
        </div>

        <div class="form-group">
            <label for="DOB">Date of Birth</label>
            <input type="text" class="form-control" id="DOB" name="DOB" >
            
        </div>
  <br>
        <div class="form-group">

            <label for="gender">Gender:</label><br>

            <input type="radio" id="gender" name="Gender" value="male">
  <label for="gender">Male</label>
  <input type="radio" id="" name="Gender" value="female">
  <label for="gender">Female</label>
            
            
        </div>
          <br>
           

        <div class="form-group">
            <label for="language">Language</label><br>
            <label for="Engligh">English</label>
            
          <input type="checkbox" name="favcolor" id="Engligh" value="Engligh" >
          <br>
          
          <label for="marathi">Marathi</label>
   
          <input type="checkbox" name="favcolor" id="marathi" value="marathi">
          <br>
          
          <label for="hindi">Hindi</label>
          <input type="checkbox" name="favcolor" id="hindi" value="hindi" >

         
            
        </div>
       <br>

         <div class="form-group">
            <label for="song"> Favorite Song/Movie Name  </label>
            <input type="text" class="form-control" id="song" name="song" >
            
        </div>


        <div class="form-group">
            <label for="userEmail">Email</label>
            <input type="text" class="form-control" id="userEmail" name="userEmail" >
            
        </div-->

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" >
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
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