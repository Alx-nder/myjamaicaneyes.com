<?php
	
$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'jameye');
	
    $title = $_POST["title"];
	$writing = $_POST["writing"];
    $date = date('Y-m-d');
    $date=$date;
    
    
    $sql = "INSERT INTO `blogpost` (`date`,`title`,`writing`)  VALUE ('$date','$title','$writing')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $showAlert = true;
    }
}
// header('location:/myjamaicaneyes.com/blog.php');

?>
