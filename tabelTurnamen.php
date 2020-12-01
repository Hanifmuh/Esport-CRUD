<!DOCTYPE html>
<html>
<head>
	<title>TabelDosen</title>
	<body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="playersearctabel.php">Esport Registered Player</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
<a href="playersearchturnamen.php" class="btn btn-info" style="float: right;" >Search</a>

    </form>
  </div>
</nav>
    </div>

<div class="container">
	<h1 class="text-center" style="color: #FFE4C4">Tournament List</h1>
	<h2 class="text-center" style="color: #FFE4C4">World Esport Tournament</h2>
	<div class="container">

	<h1 class="text-center" style="color: #FFE4C4"> ====================================== </h1>

	<div class="card mt-10">
		<div class="card-header bg-success text-white">
			Tournamnet List
		</div>

		
		<div class="card-body">
			
			<table class="table table-bordered table-striped">
				<tr>
					<th>No.</th>
					<th>Tournament</th>
					<th>Game</th>
					<th>Game Code</th>
					<th>Date</th>
					<th>Price Pool</th>
					
				</tr>
				<?php
				include "config.php";
				$no = 1;
					$tampil = mysqli_query($mysqli, "SELECT * from competition");
					while($data = mysqli_fetch_array($tampil)) :
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['Tournament']; ?></td>
			<td><?php echo $data['Game']; ?></td>
			<td><?php echo $data['Game_code']; ?></td>
			<td><?php echo $data['Date']; ?></td>
			<td><?php echo $data['Pool_Price']; ?></td>
			
		</tr>
		<?php endwhile; ?>
			</table>
<a href="adminVerify2.php" class="btn btn-success" style="float: right;" >+ More Game</a>
<a href="adminVerify.php" class="btn btn-warning" style="float: right; margin: 0 10px 0 0" >update</a>
<a href="opening.php" class="btn btn-primary" style="float: left;" >Home</a>
		</div>
	</div>

</body>
</html>
