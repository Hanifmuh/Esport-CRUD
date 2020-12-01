<?php 
Include 'config.php';

$uname = $_POST['username'];
$pass = $_POST['password'];

  $query =  "SELECT `user`, `pass` FROM `login` where user='$uname' AND pass='$pass'";
  $result = mysqli_query($mysqli,$query);

if(!$result){
    die('ERROR : gagal register : '.mysqli_error($mysqli));
  }
  echo ("Successfull Login <br>");
  echo ('You will be redirected in about 3 secs to Dashboard. If not, click <a href="index.html">here</a>.');
  header('refresh: 3; url= opening.php');
?>
