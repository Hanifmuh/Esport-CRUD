<!DOCTYPE html>
<html>
<head>
    <title>Update player</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="wrapper"></div>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">

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
                    <th>Game</th>
                    <th>Game Code</th>
                    <th>Set</th>
                    
                    
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
             <td>
             	<a href="deleteAction1.php?player_id=<?php echo $data['player_id']; ?>">
             	<svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                 <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                 <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                 </svg> </button> </a>
                 <a href="formUpdate.php?player_id=<?php echo $data['player_id']; ?>">
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 				 <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
 				 <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
			 	 </svg>  </a>
             </td>           
            
        </tr>
        <?php } ?>
            </table>
            <a href="tabelPlayer.php" class="btn btn-primary" style="float: left;" >Back</a>
      
    </div>
    </div>
</div>



</body>
</html>
