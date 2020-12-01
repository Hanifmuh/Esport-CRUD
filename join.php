<!DOCTYPE html>
<html>
<head>
    <title>Player List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="wrapper"></div>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1 class="text-center" style="color: #ffffff">Registered Player</h1>
    <h2 class="text-center" style="color: #ffffff">World ESport Tournament</h2>

    <h1 class="text-center" style="color: #ffffff"> ====================================== </h1>

    <div style="padding: 50px">
            <div class="card mt-10";>
        <div class="card-header bg-success text-white";>
            Player List
        </div>
        <div class="card-body">
            
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Player Id</th>
                    <th>Player Name</th>
                    <th>Player Team</th>
                    <th>Player Game</th>
                    <th>Tournament</th>
                    <th>Pool Price</th>
                                        
                    
                </tr>
                <?php
                include "config.php";
                $no = 1;
                    $tampil = mysqli_query($mysqli, "SELECT player.player_id, player.player_name, player.player_team,player.player_game, competition.Tournament, competition.Pool_Price
FROM player 
INNER JOIN competition 
ON player.game_code=competition.Game_code 
ORDER BY player.player_game;");
                    while($data = mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['player_id']; ?></td>
            <td><?php echo $data['player_name']; ?></td>
            <td><?php echo $data['player_team']; ?></td>
            <td><?php echo $data['player_game']; ?></td>
            <td><?php echo $data['Tournament']; ?></td>
            <td><?php echo $data['Pool_Price']; ?></td>

            
            
        </tr>
        <?php } ?>
            </table>


<a href="opening.php" class="btn btn-primary" style="float: left;" >Home</a>
        
    </div>
    </div>
</div>



</body>
</html>
