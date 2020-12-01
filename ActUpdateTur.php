<?php

include 'config.php';
    $Tournament = $_POST['Tournament'];
    $Game=$_POST['Game'];
    $Game_code=$_POST['Game_code'];
    $Date=$_POST['Date'];
    $Pool_Price=$_POST['Pool_Price'];

mysqli_query($mysqli,  "UPDATE competition SET Tournament= '$Tournament',Game='$Game',Date='$Date',Pool_Price='$Pool_Price' WHERE Game_code='$Game_code'");

header("location:tabelTurnamen.php");
?>
