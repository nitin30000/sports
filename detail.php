<html>  
<head>
    <title>Display All Player Records</title>
    <link rel="stylesheet" type="text/css" href="menu_style.css">
    <nav>
		<div class="logo">
			<p>Sports</p>
		</div>
		<ul>
			<li><a href="http://localhost:8080/sports/index.html" class="active">home</a></li>
			<li><a href="player.php">Player Entry</a></li>
			<li><a href="create_team.php">Team Create</a></li>
			<li><a href="detail.php">Display player record</a></li>
		</ul>
	</nav>
	
	</div>
    <style> 
        body
        {
            background: #D071f9;
        }
        table
        {
            background-color: white;
        }
        .update
        {
            background-color: blue;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete
        {
            background-color: red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM Player";
$data = mysqli_query($conn, $query); // Execute

$total_number = mysqli_num_rows($data); // number of rows dispaly
 // to convert data array form
//echo "$total_number";


if($total_number != 0)
{
    ?>
<h2 align="center"><mark> Dispaly All Player Records</marks> </h2>
<table border ="1" cellspacing="8" align="center">

    <tr>
    <th width="5%"> ID</th>
    <th width="10%"> First Name</th>
    <th width="10%"> Last Name</th>
    <th width="10%"> Gender</th>
    <th width="20%"> Email</th>
    <th width="15%"> Mobile number</th>
    <th width="13%"> Update/Delete</th>
</tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result[id]."</td>        
                <td>".$result[fname]."</td>
                <td>".$result[lname]."</td>
                <td>". $result[gender]."</td>
                <td>". $result[email]."</td>
                <td>". $result[mobile_number]."</td>
                
                <td><a href='update_player.php?id=$result[id]'><input type='submit' value='Update' class = 'update'></a> 
                <a href='delete_player.php?id=$result[id]'><input type='submit' value='Delete' class = 'delete' onclick = 'return checkdelete()'></a> </td>   
            </tr>";
    }
}
else
{
    echo " No records found";
}

?>
</table>

<script>
function checkdelete()
{
    return confirm('Are You Sure your want to delete this record ?');
}

    </script>

    

