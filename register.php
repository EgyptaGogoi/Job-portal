<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
      body
      {
          background-image: url('gbg.jpg');
          background-size: cover;
      }
      form
      {
        background-color: #fff;
        margin: 6em 0px;
        margin-left: 10em;
        margin-right:15em;
        padding: 26px;
        box-shadow: 10px 10px 8px 10px #888888;
      }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <form method="POST" action="login.php">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label" >Full Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputNumber" name="phone_no">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
        Already Registered? <a href="login.php">Login</a>
        </form>
    </div>    
</body>
</html>
