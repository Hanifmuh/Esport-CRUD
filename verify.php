<?php
include './config.php';
  $table_name = 'verify';

  session_start();
  // menyimpan data yang diinputkan kedalam variabel
  $user = $_POST['user'];
  $password = md5($_POST['password']);

  // query sql untuk autentifikasi
  $query = "SELECT user, pass FROM login where user='$user' AND pass='$password';";
  $result = mysqli_query($mysqli, $query);

  if(mysqli_num_rows($result))
    {
    if($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $_SESSION['user']=$row['user'];
      $_SESSION['password']=$row['pass'];
    }
    echo ("You are admin <br>");
    header('refresh: 1;url= updateTur.php');
    }
    else{
    echo("<script>alert('Invalid Username or Password. Try Again!');</script>");
    header('refresh: 0; url= tabelTurnamen.php');
  }

  ?>