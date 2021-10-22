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

session_start();
if(isset($_POST['login'])){
   $email=$_POST['email'];
   $password=$_POST['password'];

   $query="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   if(mysqli_num_rows($result)==1){
       header("location:index.php");
   }
   else{
       $error='email id or password is incorrect';
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
            margin-top: 10em;
            margin-left: 3em;
            margin-right: 40em;
            padding: 20px;
            box-shadow: 4px 4px 2px 4px #888888;
            border-radius: 10px;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary" name="login">Login</button>
            <br>New User?<br>Create Account <a href="register.php">Sign Up</a>
        </form>
    </div>
</body>
</html>