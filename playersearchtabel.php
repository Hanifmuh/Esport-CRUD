<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>
	<body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<form method="post">
<label>Search</label>
<input type="text" name="search" placeholder="Find Your Name">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=esport",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `player` WHERE player_name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<div class="container">

    <div style="padding: 50px">
            <div class="card mt-10";>
        <div class="card-header bg-success text-white";>
            Player List
        </div>
        <div class="card-body">
		<table class="table table-bordered table-striped">
			<tr>
				<th>Player Code</th>
				<th>Player Name</th>
				<th>Player team</th>
				<th>Game</th>
				<th>Game code</th>
			</tr>
			<tr>
				<td><?php echo $row->player_id; ?></td>
				<td><?php echo $row->player_name; ?></td>
				<td><?php echo $row->player_team; ?></td>
				<td><?php echo $row->player_game; ?></td>
				<td><?php echo $row->game_code; ?></td>
			</tr>

		</table>
		<a href="tabelPlayer.php" class="btn btn-secondary" style="float: left;" >back</a>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>