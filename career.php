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



if(isset($_POST['apply'])){
    $name=$_POST['name'];
    $role=$_POST['role'];
    $qualification=$_POST['qualification'];
    $grad=$_POST['grad'];

    $sql ="INSERT INTO `candidates`(`name`, `role`, `qualification`, `grad`) VALUES ('$name','$role','$qualification','$grad')";
    if(mysqli_query($conn,$sql)){
        echo "Application recorded";
    }
    else{
        echo "ERROR:Failed to Apply" . mysqli_error($conn);
    }
 }  
 mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .banner{
            background-image:url('banner-1.jpg');
            background-size:cover;
            background-repeat:no-repeat;
        }

        .banner-head{
            padding:140px 100px 15px 30px;
            font-size:60px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            color:#D8E3E7;
            text-shadow: 3px 3px #132C33;
        }
        .banner-title{
            padding:0px 100px 150px 30px;
            font-size:30px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            color:#D8E3E7;
            text-shadow: 2px 2px #132C33;
        }

        .card{
            background-color: white;
            margin-top: 2em;
            margin-left: 4em;
            margin-bottom: 2em;
            margin-right: 30px;
            padding: 10px;
            box-shadow: 4px 4px 2px 4px #888888;
        }
    </style>
    <title>Career</title>
</head>
<body>
  <div class="banner">
    <h1 class="banner-head">Job Portal</h1>
    <p class="banner-title">Find the best job <br>according to your skills.</p>
  </div>


  <div class="row">
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

        $sql = "SELECT `cname`, `position`, `jdesc`, `ctc`, `skills` FROM `job`";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows>0){
          while($rows=$result->fetch_assoc()){
            echo'
            <div class="card card-body col-md-3">
            <div class="jobs">
            <h3 style="text-align: center; font-size: 30px;">'.$rows['cname'].'</h3>
            <h4 style="text-align: center; font-size: 20px;">'.$rows['position'].'</h4>
            <p style="color: black; text-align:justify;">'.$rows['jdesc'].'</p>
            <p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
            <p style="color: black;"><b>CTC:</b>'.$rows['jdesc'].'</p>
            <a class="btn btn-primary" data-toggle="modal" href="#modal" role="button" aria-expanded="false" aria-controls="collapseExample">
                Apply
            </a>
            </div>
            </div>';
          }}
       ?>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Application Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name : </label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Role : </label>
            <input type="text" class="form-control" name="role">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification : </label>
            <input type="text" class="form-control" name="qualification">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Graduation Year : </label>
            <input type="text" class="form-control" name="grad">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="apply" name="apply" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>