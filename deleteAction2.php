<?php

include 'config.php';
 $game_code = $_GET['Game_code'];
// $tnama = $_POST['tnama'];
// $tteam = $_POST['tteam'];
// $tgame = $_POST['tgame'];
// $tcode = $_POST['tcode'];



  $query =  "DELETE FROM competition WHERE Game_code = '$game_code'";
   mysqli_query($mysqli,$query);
if(!$query) {
   die('ERROR : Data gagal dihapus pada tabel: ' .mysqli_error($mysqli));
  // echo ('data berhasil dihapus dari tabel ' . $table_name);
}
else if($query) {
   //die('ERROR : Data gagal dihapus pada tabel: ' .mysqli_error($mysqli));
  echo ('data berhasil dihapus dari tabel ');
}


//header('location: updatePlayer.php');

?>
<a href="tabelTurnamen.php">Back to Tabel</a>