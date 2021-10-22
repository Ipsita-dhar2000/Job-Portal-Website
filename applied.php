<?php include 'header.php'?>

<div class="content">
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Candidate Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Graduation Year</th>
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

                    $sql = "SELECT `name`, `role`, `qualification`, `grad` FROM `candidates`";
                    $result = mysqli_query($conn,$sql);
                    $i=0;
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo"
                            <tbody>
                                <tr> 
                                    <td>".++$i."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['role']."</td>
                                    <td>".$row['qualification']."</td>
                                    <td>".$row['grad']."</td>
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