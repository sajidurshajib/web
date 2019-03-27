<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'alumni_header.php'?>
    <title>Register</title>
</head>
<body class="login-body">
    <div class="inlog col-sm-12 col-12">
    <div class="last-line txt col-sm-12 col-12">Already an Alumnie?&nbsp;<a class="reg-txt" href="login.php">Login</a>!</div>

    <form action="/action_page.php" class="login-form">
    <div class="form-group ">
        <label for="Name" class="txt">Name:</label>
        <input type="text" placeholder="YOUR FULL NAME" class="form-control col-lg-4 col-md-5 col-sm-8 col-10" id="name">
      </div>
      <div class="form-group ">
        <label for="ID" class="txt">ID:</label>
        <input placeholder="UNIVERSITY PROVIDED ID" type="ID" class="form-control col-lg-4 col-md-5 col-sm-8 col-10" id="id-num">
      </div>
      <div class="form-group ">
        <label for="email" class="txt">Email address:</label>
        <input placeholder="E-MAIL" type="email" class="form-control col-lg-4 col-md-5 col-sm-8 col-10" id="email">
      </div>
      <div class="form-group">
        <label for="pwd" class="txt">Password:</label>
        <input placeholder="PASSWORD" type="password" class="form-control col-lg-4 col-md-5 col-sm-8 col-10" id="pwd">
      </div>
      <div class="form-group">
        <label for="pwd" class="txt">Confirm Password:</label>
        <input placeholder="RE-TYPE PASSWORD" type="password" class="form-control col-lg-4 col-md-5 col-sm-8 col-10" id="re-pwd">
      </div>
      <div class="form-group ">
        <label for="ebatchmail" class="txt">Batch:</label>
        <input placeholder="(1 TO 15)" type="number" class="form-control col-lg-4 col-md-5 col-sm-8 col-10" id="batch">
      </div>
      <button type="submit" class="sub-btn btn btn-primary">SUBMIT</button>
    </form> 
    </div>
</body>
</html>
