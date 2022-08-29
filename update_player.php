<?php include("connection.php"); 
$id = $_GET['id'];
$query = "SELECT * FROM Player where id= '$id'";
$data = mysqli_query($conn, $query); // Execute

$result = mysqli_fetch_assoc($data)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>
    <link rel="stylesheet" href="player_design.css">

    </head>


<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title" align="center">
        UPDATE PLAYER DETAILS
    </div>

    <div class="form">
        <div class = "input_field">
            <lable>First Name</lable>
            <input type = "text" value = "<?php echo $result['fname']; ?>" class="input" name="fname" required>
        </div>
        <div class = "input_field">
            <lable>Last Name</lable>
            <input type = "text" value = "<?php echo $result['lname']; ?>"class="input" name="lname" required>
        </div>
        <div class = "input_field">
            <lable>Gander </lable>
            <div class="custom_select">

            <select name="gender" required>
                <option value="">Select</option>

                <option value="male"
                <?php
                    if($result['gender'] == 'male')
                    {
                        echo "selected";
                    }
                ?>
                >
                Male</option>
                <option value="female"
                <?php
                    if($result['gender'] == 'female')
                    {
                        echo "selected";
                    }
                ?>
                >
                Female</option>
            </select>

        </div>
</div>
        <div class = "input_field">
            <lable>Email</lable>
            <input type = "text" value = "<?php echo $result['email']; ?>"class="input" name="email" required>
        </div>
        <div class = "input_field">
            <lable>Mobile number</lable>
            <input type = "text" value = "<?php echo $result['mobile_number']; ?>" class="input" name="phone" required>
        </div>
        <div class="input_field">
            <input type="submit" value="Update Details" class="btn" name="update">
        </div>
</div>
</form>
</div>
</body>
</html>


<?php
  if(isset($_POST['update']))
  {
    
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $Mobile_number = $_POST['phone'];
     
     $query = "UPDATE `player` SET `fname`='$fname',`lname`='$lname',`gender`='$gender',`email`='$email',`mobile_number`='$Mobile_number' WHERE id= '$id'";
     $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "<script> alert ('Update Data')</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/sports/detail.php" />

            <?php
        }
        else
        {
            echo "Failed some error";

        }
    }
    
?>