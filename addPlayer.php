<?php

include 'config.php';
$table_name = 'player';

$tid = $_POST['tid'];
$tnama = $_POST['tnama'];
$tteam = $_POST['tteam'];
$tgame = $_POST['tgame'];
$tcode = $_POST['tcode'];



  $query =  "INSERT INTO player (player_id, player_name, player_team, player_game, game_code)
             VALUES ('$_POST[tid]', '$_POST[tnama]', '$_POST[tteam]', '$_POST[tgame]', '$_POST[tcode]')";
   mysqli_query($mysqli,$query);
if(!$query) {
   die('ERROR : Data gagal ditambahkan kedalam tabel'. $table_name . ': ' .mysqli_error($mysqli));
}
echo ('data berhasil ditambahkan kedalam tabel ' . $table_name);

header('location: tabelPlayer.php');

?>
