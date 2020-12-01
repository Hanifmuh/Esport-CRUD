

<!DOCTYPE html>
<html>
<head>
	<title>Tourna</title>
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
    <form method="post" action="addTurnamen.php">
    	<div class="form-group">
    		<label>Tournament</label>
    		<input type="text" name="tt" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label>Game</label>
    		<input type="text" name="tga" class="form-control"  required>
      </div>
      <div class="form-group">
        <label>game code</label>
        <input type="text" name="tco" class="form-control"  required>
      </div>     
      <div class="form-group">
        <label>date</label>
        <input type="text" name="tda" class="form-control"  required>
      </div>
      <div class="form-group">
        <label>price pool</label>
        <input type="text" name="tpri" class="form-control"  required>
      </div>

    <a href="addTurnamen.php">
    	<button type="submit" class="btn btn-block btn-primary" name="submit">Submit</button>
</a>
    	<button type="reset" class="btn btn-block btn-danger" name="breset">Reset</button>
    	<a href="tabelTurnamen.php" class="btn btn-block btn-warning">Back</a>

    </form>
  </div>
  </div>
</div>

</body>
</html>
