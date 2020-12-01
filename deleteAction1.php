<?php

include 'config.php';
 $id = $_GET['player_id'];
// $tnama = $_POST['tnama'];
// $tteam = $_POST['tteam'];
// $tgame = $_POST['tgame'];
// $tcode = $_POST['tcode'];



  $query =  "DELETE FROM player WHERE player_id = '$id'";
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
<a href="tabelPlayer.php">Back to Tabel</a>