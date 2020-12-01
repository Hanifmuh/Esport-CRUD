<?php

include 'config.php';
    $player_id = $_POST['player_id'];
    $player_name=$_POST['player_name'];
    $player_team=$_POST['player_team'];
    $player_game=$_POST['player_game'];
    $game_code=$_POST['game_code'];

mysqli_query($mysqli,  "UPDATE player SET player_id= '$player_id',player_name='$player_name',player_team='$player_team',game_code='$game_code' WHERE player_id='$player_id'");

header("location:tabelPlayer.php");
?>
