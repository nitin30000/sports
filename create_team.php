<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>
    <link rel="stylesheet" href="player_design.css">
    <link rel="stylesheet" type="text/css" href="menu_style.css">

    </head>


<body>
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
    <div class="container">
        <form action="#" method="POST">
        <div class="title" align="center">
        TEAM CREATE
    </div>

    <div class="form">
    <div class = "input_field">
            <lable>Player Name </lable>
            <select name="fname" required>
                <option value="">Select</option>
                
            </select>

        </div>
       
        <div class = "input_field">
            <lable>Country </lable>
            <select name="country" required>
                <option value="">Select</option>
                <option value="india">India</option>
                <option value="pakistan">Pakistan</option>
                <option value="australia">Australia</option>
                <option value="newzealand">New Zealand</option>
                <option value="England">England</option>
                <option value="srilanka">Sri Lanka</option>
            </select>

        </div>
        <div class="input_field">
            <input type="submit" value="Create" class="btn" name="register">
        </div>
</div>
</form>
</div>
</body>
</html>


<?php
//   if(isset($_POST['register']))
//   {
    
//         $fname = $_POST['fname'];
//         $lname = $_POST['lname'];
//         $gender = $_POST['gender'];
//         $email = $_POST['email'];
//         $Mobile_number = $_POST['phone'];
            $query = "SELECT * FROM player";
        //$query = "INSERT INTO 'player'(fname,lname,gender,email,mobile_number) values('fname','lname','gender','email','phone')";
     //$query = "INSERT INTO `player`(`fname`, `lname`, `gender`, `email`, `mobile_number`) VALUES ('$fname','$lname','$gender','$email','$Mobile_number')";
        $data = mysqli_query($conn,$query);
        $row = mysqli_num_rows($data);
        while ($res = mysqli_fetch_array($query)){
                echo $res ['fname'], "<br>";
        }
        // if($data)
        // {
        //     //echo "Data Submitted";
        //     echo "<script> alert ('Data Submited')</script>";
        // }
        // else
        // {
        //     //echo "Failed some error";
        //     echo "<script> alert ('Data Not Submited')</script>";
        // }
    //}
    
?>
