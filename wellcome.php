<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
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

    <title>welcome  </title>
  </head>
  <body>
   <?php require 'partials/_nav.php'?>
    

   
   
   <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>


    
   <div class="row">
  <div class="column">
    <img src="https://source.unsplash.com/400x400/daily" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="https://source.unsplash.com/400x400/weekly?water" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="https://source.unsplash.com/400x400/" alt="Mountains" style="width:100%">
  </div>
</div>
   

<div class="row">
  <div class="column">
    <img src="https://source.unsplash.com/400x400/?nature,water" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="https://source.unsplash.com/400x400/weekly?home" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="https://source.unsplash.com/400x400/?random" alt="Mountains" style="width:100%">
  </div>
</div>
<div class="row">
  <div class="column">
    <img src="https://source.unsplash.com/400x400/daily?food" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="https://source.unsplash.com/400x400/weekly?" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="https://source.unsplash.com/400x400/?code" alt="Mountains" style="width:100%">
  </div>
</div>
<div class="row">
  <div class="column">
    <img src="https://source.unsplash.com/400x400/daily?animal" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="https://source.unsplash.com/400x400/weekly?gym" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="https://source.unsplash.com/400x400/daily?hotel" alt="Mountains" style="width:100%">
  </div>
</div> 
<div class="row">
<div class="column">
  <img src="https://source.unsplash.com/400x400/daily?fish" alt="Snow" style="width:100%">
</div>
<div class="column">
  <img src="https://source.unsplash.com/400x400/weekly?car" alt="Forest" style="width:100%">
</div>
<div class="column">
  <img src="https://source.unsplash.com/400x400/?coffice" alt="Mountains" style="width:100%">
</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://bootstrap.com/"> Bootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

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
