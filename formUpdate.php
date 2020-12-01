<!doctype html>
<html>
<head>
	<title>Sistem Basis Data</title>
  <body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
  <
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
	<body>
		<div class="card">
			<div class="container">	
				<div class = "row">

					<?php
					include "config.php";
					$player_id = $_GET['player_id'];
					$query_mysql = mysqli_query($mysqli, "SELECT * FROM player WHERE player_id='$player_id'")or die(mysqli_error($connection));
					$nomor = 1;
					while($data = mysqli_fetch_array($query_mysql)){
					?>
						<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
							<div class="card card-signin my-5">
								<div class="card-body">
									<h5 class="card-title text-center">Edit Player</h5>
										<form class="form-signing" action="ActUpdatePlayer.php" method="post">
											<div class="form-label-group">
											<label>Player ID</label>
												<input type="text" name="player_id" value="<?php echo $data['player_id'] ?>" class="form-control" required autofocus>
												</div><br>

												<label>Player Name</label>
												<div class="form-label-group">
												<input type="text" name="player_name" value="<?php echo $data['player_name'] ?>" class="form-control" required>
												</div><br>
												<label>Player Team</label>
												<div class="form-label-group">
												<input type="text" name="player_team" value="<?php echo $data['player_team'] ?>"class="form-control" required>
												</div>
												<label>Player Game</label>
												<div class="form-label-group">
												<input type="text" name="player_game" value="<?php echo $data['player_game'] ?>"class="form-control" required>
												</div>
												<label>Game Code</label>
												<div class="form-label-group">
												<input type="text" name="game_code" value="<?php echo $data['game_code'] ?>"class="form-control" required>
												</div>
												<br>
												<input class ="btn btn-warning btn-block " type="submit" value="Simpan">
												<a class = "btn btn-secondary btn-block " href="tabelPlayer.php">Kembali</a>	
																	
										</form>
									</div>
      						</div>
    					</div>
					<?php } ?>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</body>
</html>