<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update


// Display selected user data based on id
// Getting id from url
$id = $_GET['player_id'];

if(isset($_POST['update']))
{   
    $id = $_POST['player_id'];
    $name=$_POST['player_name'];
    $team=$_POST['player_team'];
    $game=$_POST['player_game'];
    $code=$_POST['game_code'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET player_id= '$id',player_name='$name',player_team='$team',player_game='$game' WHERE player_id='$id'");

    // Redirect to homepage to display updated user in list
    header("Location: tabelPlayer.php");
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="tabelPlayer.php">Back</a>
    <br/><br/>

    <h2>Kelompok XX</h2>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Team</td>
                <td><input type="text" name="team" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Game</td>
                <td><input type="text" name="game" value=<?php echo $game;?>></td>
            </tr>
            <tr> 
                <td>Code</td>
                <td><input type="text" name="code" value=<?php echo $code;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
