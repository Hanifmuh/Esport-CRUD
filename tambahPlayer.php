

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<h1>  </h1>
<body>
	<div class="container">
	<div class="card mt-7">
  <div class="card-header bg-success text-white">
    Register Form
  </div>
  <div class="card-body">
    <form method="post" action="addPlayer.php">
    	<div class="form-group">
    		<label>Player Id</label>
    		<input type="text" name="tid" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label>Player Name</label>
    		<input type="text" name="tnama" class="form-control"  required>
      </div>
      <div class="form-group">
        <label>Player Team</label>
        <input type="text" name="tteam" class="form-control"  required>
      </div>     
      <div class="form-group">
        <label>Game</label>
        <input type="text" name="tgame" class="form-control"  required>
      </div>
            <div class="form-group">
        <label>Game Code</label>
        <input type="text" name="tcode" class="form-control"  required>
      </div>

    <a href="addPlayer.php">
    	<button type="submit" class="btn btn-block btn-primary" name="bsimpan2">Submit</button>
</a>
    	<button type="reset" class="btn btn-block btn-danger" name="breset">Reset</button>
    	<a href="tabelPlayer.php" class="btn btn-block btn-warning">Back</a>

    </form>
  </div>
  </div>
</div>

</body>
</html>
