<!DOCTYPE html>
<html>
<head>
    <title>Player List</title>
    
    
  

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="playersearctabel.php"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
<a href="playersearchtabel.php" class="btn btn-info" style="float: left;" >Search</a>

    </form>
  </div>
</nav>
    </div>

<div class="container">
    <h1 class="text-center" style="color: #ffffff ; margin-top: 100px ">Registered Player</h1>
    <h2 class="text-center" style="color: #ffffff">World ESport Tournament</h2>

    <h1 class="text-center" style="color: #ffffff"> ====================================== </h1>

    <div style="padding: 50px">
            <div class="card mt-10";>

        <div class="card-body">
            
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Player Id</th>
                    <th>Player Name</th>
                    <th>Player Team</th>
                    <th>Game</th>
                    <th>Game Code</th>
                                        
                    
                </tr>
                <?php
                include "config.php";
                $no = 1;
                    $tampil = mysqli_query($mysqli, "SELECT * from player ");
                    while($data = mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['player_id']; ?></td>
            <td><?php echo $data['player_name']; ?></td>
            <td><?php echo $data['player_team']; ?></td>
            <td><?php echo $data['player_game']; ?></td>
            <td><?php echo $data['game_code']; ?></td>

            
            
        </tr>
        <?php } ?>
            </table>

<a href="tambahPlayer.php" class="btn btn-success" style="float: right;" >+ Register</a>
<a href="updatePlayer.php" class="btn btn-warning" style="float: right; margin: 0 10px 0 0; padding: 6px 20px" >update</a>
<a href="opening.php" class="btn btn-primary" style="float: left;" >Home</a>
<body>
<!-- Button trigger modal -->
<button type="button" style="float: right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Show Team Detail
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: 700px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Tabel Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div style="wi: 0 ">
            <div class="card mt-10";>

        <div class="card-body">
            <h3 style="text-align: center;">Team Detail</h3>
            
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Team Id</th>
                    <th>Team Name</th>
                    <th>CEO</th>
                    <th>Total Player</th>

                                        
                    
                </tr>
                <?php
                include "config.php";
                $no = 1;
                    $tampil = mysqli_query($mysqli, "SELECT * from team ");
                    while($data = mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id_team']; ?></td>
            <td><?php echo $data['nama_team']; ?></td>
            <td><?php echo $data['CEO']; ?></td>
            <td><?php echo $data['total_pemain']; ?></td>
        

            
            
        </tr>
        <?php } ?>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>       
    </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
