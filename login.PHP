<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
    .signup-text {
      text-align: center;
      margin-top: 15px;
    }
  </style>
</head>
<body>

<div class="container">
  <?php
  session_start();
  if (isset($_POST['submit'])) {
      $emailValue = $_POST['emailName'];
      $passwordValue = $_POST['passName'];

      if (empty($emailValue)) {
          echo '<div class="alert alert-warning">Email must be filled out!</div>';
      } elseif (!preg_match("/^[\w\.-]+@emsi\.ma$/", $emailValue)) {
          echo '<div class="alert alert-warning">Please enter a valid EMSI email (e.g., example@emsi.ma)</div>';
      } elseif (empty($passwordValue)) {
          echo '<div class="alert alert-warning">Password must be filled out!</div>';
      } else {
          $_SESSION['email'] = $emailValue;
          header("Location: home.php");
          exit();
      }
  } else {
      echo '<h2 class="text-center">Please Log In</h2>';
  }
  ?>

  <!-- Login Form -->
  <form action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="emailName" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="passName" placeholder="Password">
    </div>
    <div class="form-check mb-3">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
  </form>

  <!-- Sign Up Option -->
  <div class="signup-text">
    <p>Don't have an account?</p>
    <a href="signup.php" class="btn btn-secondary btn-block">Sign Up Here</a>
  </div>
</div>

</body>
</html>
