<?php include 'config.php' ?>
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
          margin: 0px;
          padding: 0px;
          background-image: url('gbg.jpg');
          background-size: cover;
      }
      form
      {
        background-color: #fff;
        margin-top: 3em;
        margin-left: 20em;
        margin-right:20em;
        padding: 40px;
        box-shadow: 10px 10px 8px 10px #888888;
      }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <form method="POST" action="config.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Submit</button>
        <p style="text-align : center;">New user?<br>Create Account <a href="register.php" >Sign Up</a></p>
        </form>
    </div>    
</body>
</html>
