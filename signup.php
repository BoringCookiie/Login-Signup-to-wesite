<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <!-- Bootstrap CSS for styling -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styling for the form container */
    .container {
      max-width: 400px;
      margin-top: 50px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }
    .login-text {
      text-align: center;
      margin-top: 15px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center">Sign Up</h2>

  <?php
  if (isset($_POST['signup'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (empty($name)) {
          echo '<div class="alert alert-warning">Name must be filled out!</div>';
      } elseif (empty($email)) {
          echo '<div class="alert alert-warning">Email must be filled out!</div>';
      } elseif (!preg_match("/^[\w\.-]+@emsi\.ma$/", $email)) {
          echo '<div class="alert alert-warning">Please enter a valid EMSI email (e.g., example@emsi.ma)</div>';
      } elseif (empty($password)) {
          echo '<div class="alert alert-warning">Password must be filled out!</div>';
      } else {
          // Here, you would typically save the user information to a database.
          echo '<div class="alert alert-success">Account created successfully! You can now <a href="login.php">log in</a>.</div>';
      }
  }
  ?>

  <!-- Sign Up Form -->
  <form action="" method="post">
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
    </div>
    <div class="form-group">
      <label for="email">EMSI Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter EMSI email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
    </div>
    <button type="submit" name="signup" class="btn btn-primary btn-block">Sign Up</button>
  </form>

  <!-- Login Option -->
  <div class="login-text">
    <p>Already have an account?</p>
    <a href="login.php" class="btn btn-secondary btn-block">Log In Here</a>
  </div>
</div>

</body>
</html>
