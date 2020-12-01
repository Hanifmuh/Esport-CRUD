<!DOCTYPE html>
<html>
<head>
    <title>Team List</title>
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
                    <th>Team Id</th>
                    <th>CEO</th>
                                        
                    
                </tr>
                <?php
                include "config.php";
                $no = 1;
                    $tampil = mysqli_query($mysqli, "Select * From kumpulantim;");
                    while($data = mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['player_id']; ?></td>
            <td><?php echo $data['player_name']; ?></td>
            <td><?php echo $data['player_team']; ?></td>
            <td><?php echo $data['id_team']; ?></td>
            <td><?php echo $data['CEO']; ?></td>

            
            
        </tr>
        <?php } ?>
            </table>


<a href="opening.php" class="btn btn-primary" style="float: left;" >Home</a>
        
    </div>
    </div>
</div>



</body>
</html>