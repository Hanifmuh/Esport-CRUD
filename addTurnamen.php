<?php

include 'config.php';
$table_name = 'competition';

$tt = $_POST['tt'];
$tga = $_POST['tga'];
$tco = $_POST['tco'];
$tda = $_POST['tda'];
$tpri = $_POST['tpri'];



  $query =  "INSERT INTO competition (Tournament, Game, Game_code, Date, Pool_Price)
             VALUES ('$_POST[tt]', '$_POST[tga]', '$_POST[tco]', '$_POST[tda]', '$_POST[tpri]')";
   mysqli_query($mysqli,$query);
if(!$query) {
   die('ERROR : Data gagal ditambahkan kedalam tabel'. $table_name . ': ' .mysqli_error($mysqli));
}
echo ('data berhasil ditambahkan kedalam tabel ' . $table_name);

//header('location: tabelTurnamen.php');

?>

<a href="tabelTurnamen.php">Back to Table</a>