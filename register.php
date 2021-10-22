<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}
echo"";

if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `users`(`Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    }else{
        echo "ERROR: Could not be able to execute $sql." . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-image: url('reg-log-bg.jpg');
            background-size: cover;
        }

        form{
            background-color: #DDDDDD;
            margin-top: 2em;
            margin-left: 3em;
            margin-right: 40em;
            padding: 20px;
            box-shadow: 4px 4px 2px 4px #888888;
            border-radius: 10px;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputName">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Full Name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="exampleInputNumber" placeholder="Enter Phone Number" name="phone_no" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" required>
            </div>
    
            <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
            <br>
            Already Registered? <a href="login.php">Login</a>
        </form>
    </div>
</body>
</html>