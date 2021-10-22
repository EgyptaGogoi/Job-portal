<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Career</title>
    <style>
        .col-12{
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid" style ="background: url('gbg.jpg'); background-size: cover;">
                    <div class="container"  style="padding-bottom: 5em;">
                        <h1 class="display-4" style="color: white; padding-top: 30px; padding-bottom:  10px;" >Job Portal</h1>
                        <p class="lead" style="color: white;">Best jobs available matching your skills.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $server='localhost';
            $username='root';
            $password='aeaspire';
            $database='jobs';
            
            $conn= new mysqli($server,$username,$password,$database);
            
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            
            }
                $sql="SELECT `cname`, `position`, `jdesp`, `skills`, `CTC` FROM `jobs`";
                $result=mysqli_query($conn,$sql);
                if($result->num_rows > 0){
                    echo '
                    <div class="scontainer" style="display: flex">';
                    while($rows=$result->fetch_assoc())
                    {
                        echo '
                        <style>
                        .jobs{
                        background-color: #fff;
                        margin: 5em 0px;
                        margin-left: 2em;
                        margin-right:2em;
                        padding: 30px 20px;
                        border: 0.8px solid black;
                        box-shadow: 10px 10px 8px 10px #888888;
                        }
                        </style>
                        <div class = "col-md-14">
                            <div class="jobs">
                                <h3 style="text-align: center;">'. $rows['position'].'</h3>
                                <h4 style="text-align: center;">'. $rows['cname'].'</h4>
                                <p style="color: black; text-align: justify;">'. $rows['jdesp'].'</p>
                                <p style="color: black;"><b> Skills Required:</b>'. $rows['skills'].'</p>
                                <p style="color: black;"><b> TC: </b>'. $rows['CTC'].'</p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                                Apply Now!
                                </button>
                            </div>
                        </div>';
                    }
                    echo '</div>';
                }     
            ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Applying for</label>
                                    <input type="text" class="form-control" name="apply">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="col-form-label">Qualification</label>
                                    <input type="text" class="form-control" name="qual">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Year Passed Out</label>
                                    <input type="text" class="form-control" name="year">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="sapply" class="btn btn-primary">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha512-hCP3piYGSBPqnXypdKxKPSOzBHF75oU8wQ81a6OiGXHFMeKs9/8ChbgYl7pUvwImXJb03N4bs1o1DzmbokeeFw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>