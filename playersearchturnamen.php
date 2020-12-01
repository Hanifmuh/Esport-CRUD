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
<input type="text" name="search" placeholder="Find your game">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=esport",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `competition` WHERE game = '$str'");

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
					<th>Tournament</th>
					<th>Game</th>
					<th>Game Code</th>
					<th>Date</th>
					<th>Price Pool</th>
					
			</tr>
			<tr>
				<td><?php echo $row->Tournament; ?></td>
				<td><?php echo $row->Game; ?></td>
				<td><?php echo $row->Game_code; ?></td>
				<td><?php echo $row->Date; ?></td>
				<td><?php echo $row->Pool_Price; ?></td>
			</tr>

		</table>
				<a href="tabelTurnamen.php" class="btn btn-secondary" style="float: left;" >back</a>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>