<!doctype html>
<html>
<head>
	<title>Sistem Basis Data</title>
	 <body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	 </body>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
	<body>
		<div class="card">
			<div class="container">	
				<div class = "row">

					<?php
					include "config.php";
					$Game_code = $_GET['Game_code'];
					$query_mysql = mysqli_query($mysqli, "SELECT * FROM competition WHERE Game_code='$Game_code'")or die(mysqli_error($mysqli));
					$nomor = 1;
					while($data = mysqli_fetch_array($query_mysql)){
					?>
						<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
							<div class="card card-signin my-5">
								<div class="card-body">
									<h5 class="card-title text-center">Edit Tournament</h5>
										<form class="form-signing" action="ActUpdateTur.php" method="post">
											<div class="form-label-group">
											<label>Tournament</label>
												<input type="text" name="Tournament" value="<?php echo $data['Tournament'] ?>" class="form-control" required autofocus>
												</div><br>

												<label>Game</label>
												<div class="form-label-group">
												<input type="text" name="Game" value="<?php echo $data['Game'] ?>" class="form-control" required>
												</div><br>
												<label>Game_code</label>
												<div class="form-label-group">
												<input type="text" name="Game_code" value="<?php echo $data['Game_code'] ?>"class="form-control" required>
												</div>
												<label>Pool_price</label>
												<div class="form-label-group">
												<input type="text" name="Pool_Price" value="<?php echo $data['Pool_Price'] ?>"class="form-control" required>
												</div>

												<br>
												<input class ="btn btn-warning btn-block " type="submit" value="Simpan">
												<a class = "btn btn-secondary btn-block " href="tabelTurnamen.php">Kembali</a>	
																	
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