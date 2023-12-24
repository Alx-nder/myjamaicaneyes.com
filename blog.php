<?php
    session_start();   
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'jameye');

    if(!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(!isset($_SESSION['email']))
    {
        header('location:/myjamaicaneyes.com/login.php');
    } 
    // if($_SESSION['email']=='guest'){
    //   header('location:/virtualTourWebsite/validations/login.php');
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lancelot AkaNico's blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url(images/sundarkbase.jpeg);  background-repeat: no-repeat;background-size:cover;">


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
            <li class="nav-item"><a href="#" class="nav-link active">Blog</a></li>
              <?php
              if(($_SESSION['email']='guest')){
                echo('<li class="nav-item"><a href="login.php" class="nav-link active">Login</a></li>');
              }
              ?>
          </ul>
        </div>
      </div>
    </nav>

   <div class="container  col-md-5">

  <form class="" method="POST" action="upload.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label >Title</label>
              <input type="text" name='title' class="form-control"  placeholder="Title" required>
            </div>
          </div>

          <div class="form-group">
           <label for="exampleFormControlTextarea1">Writing</label>
            <textarea class="form-control" name='writing' type='text' rows="3" required></textarea>
          </div>
          
          <button type="submit" style="background-color: #7292c7;" class="btn  mb-3">Upload</button>


        </form>
        </div>
</body>
</html>