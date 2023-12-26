<?php
session_start();

//BUG-FIX - to destroy guest session
session_destroy();

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'jameye');

if ($_POST['email'] ==''){
    $_POST['email'] ='guest';
}
else{
    $email = $_POST['email'];
}

if ($_POST['password'] ==''){
    $_POST['password'] ='guest';
}
else{
    $pass = $_POST['password'];
}



$check = "select * from login_id where email= '$email' && password='$pass'";

$result = mysqli_query($con, $check);

$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['email']=$email;
    header('location:/myjamaicaneyes.com/blog.php');
}
else{
    header('location:/myjamaicaneyes.com/login.php');
}

?>
