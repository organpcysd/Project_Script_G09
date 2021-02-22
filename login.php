
<?php
    include('header.php');
?>
<head>
<?php
  include('navbar.php');
?>
</head>

<div class="d-flex justify-content-center">
    <form method="POST" action = "check.php">
  <div class="form-group">
    <label>Username</label>
    <input type="textbox" class="form-control" placeholder="Enter Username" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>