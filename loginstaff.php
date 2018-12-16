<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>STAFF LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Staff Login</h2>
  </div>
  <form method="post" action="homestaff.php">
    <?php include('errors.php'); ?> 
    <div class="input-group">
      <label>Username</label> 
      <input name="username" type="text">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input name="password" type="password">
    </div>
    <div class="input-group"><br>
      <button type="submit" name="staff-btn" class="btn">Login</button>
    </div>
    <p>
            <br>
            want to see the service requests?
            <a href="homestaff.php">homestaff!</a>
    </p>
  </form>
</body>
</html>