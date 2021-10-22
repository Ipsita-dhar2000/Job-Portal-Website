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
   
    if(isset($_POST['submit'])){
       $cname=$_POST['cname'];
       $pos=$_POST['pos'];
       $jdesc=$_POST['jdesc'];
       $skills=$_POST['skills'];
       $ctc=$_POST['ctc'];
   
       $sql ="INSERT INTO `job`(`cname`, `position`, `jdesc`, `skills`, `ctc`) VALUES ('$cname','$pos','$jdesc','$skills','$ctc')";
       if(mysqli_query($conn,$sql)){
           echo "New Job Posted";
       }
       else{
           echo "ERROR:Failed to Post the Job" . mysqli_error($conn);
       }
    }  
    mysqli_close($conn);
?>
<?php include 'header.php'?>
    <!-- Page content -->
    <div class="content">
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Post a Job
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="company-name">Company Name</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Company Name" name="cname">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter Position" name="pos">
                    </div>
                    <div class="form-group">
                        <label for="job-description">Job Description</label>
                        <input type="text" class="form-control" id="job-description" placeholder="Enter Description" name="jdesc">
                    </div>
                    <div class="form-group">
                        <label for="job-description">Skills</label>
                        <input type="text" class="form-control" id="job-description" placeholder="Enter Skills" name="skills">
                    </div>
                    <div class="form-group">
                        <label for="ctc">CTC</label>
                        <input type="text" class="form-control" id="ctc" placeholder="Enter CTC" name="ctc">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">CTC</th>
                </tr>
            </thead>
                
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

                    $sql = "SELECT `cname`, `position`, `ctc` FROM `job`";
                    $result = mysqli_query($conn,$sql);
                    $i=0;
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo"
                            <tbody>
                                <tr> 
                                    <td>".++$i."</td>
                                    <td>".$row['cname']."</td>
                                    <td>".$row['position']."</td>
                                    <td>".$row['ctc']."</td>
                                </tr>";
                        }
                    }
                    else{
                        echo"";
                    }
                ?>
                </tbody>  
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>