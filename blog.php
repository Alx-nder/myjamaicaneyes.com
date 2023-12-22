<?php
    session_start();   
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'virttour');

    if(!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(!isset($_SESSION['email']))
    {
        header('location:/myjamaicaneyes.com/index.html');
    } 
    if($_SESSION['email']=='guest'){
      header('location:/virtualTourWebsite/validations/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lancelot AkaNico's blog</title>
</head>
<body>
<nav class="navbar   navbar-light navbar-expand-lg" style="background-color: rgb(0, 0, 0,0)!important;">
      <div class="container">
        <a href="index.html"  class="navbar-brand">
          <h2 style="font-weight: 300;" >Lancelot AkaNico</h2> 
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
          </button>
          
        <div class="collapse  navbar-collapse" id="navbarResponsive">

          <ul class="navbar-nav ml-auto" style="font-size:26px">
            <li class="nav-item"><a href="index.html" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#booksection" class="nav-link active">Books</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link active">Blog</a></li>
            
          </ul>

        </div>
      </div>
    </nav>

</body>
</html>