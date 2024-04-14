<?php
include('database.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>National Geographic | Login</title>

  <link rel="stylesheet" href="/login/login.css">
</head>

<body>

  <a href="/website.html"><img id="logo" src="/images/National-Geographic-logo.png" alt="logo"></a>

  <main class="login-container">
    
    <form id="loginform" action="login.php" method="post">

      <p><strong>Log into your National Geographic account!</strong></p>
      
      <label for="username"><strong>Username or Email:</strong></label><br><br>
      <input type="text" id="username" name="username" placeholder="Username or Email" required>

      <label for="password"><strong>Password:</strong></label><br><br>
      <input type="password" id="password" name="password" placeholder="Password" required>

      <div class="checkbox-container">
        <input type="checkbox" id="remember-me">
        <label for="remember-me"><strong>Remember Me</strong></label>
      </div>

      <br>

      <button type="submit">Login</button>
      <button id="reset" type="reset" style="background-color: #FFDC00;
                                             color: #fff;
                                             padding: 8px 10px;
                                             border: none;
                                             border-radius: 3px;
                                             cursor: pointer;
                                             transition: transform 0.2s;">
                                            Reset</button>
      <a href="#">Forgot Password?</a>

    </form>

    <p>This email and password lets you seamlessly log into services and experiences of National Geographic.</p> 
    <p>If you don't have one, create one!</p>

    <p><strong>Don't have an account? </strong><a href="/register/subscribe.php">Sign Up Here</a></p>

    <p>Need Help? <a href="#">Contact Us</a></p>
    <p>Email: support@gmail.com; Phone: +91-123-456-7890</p>

  </main>

  <footer>
    <p>&copy; Lakshya Pawar & Navodit Kapoor IT-4C</p>   
  </footer>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM subscribe WHERE Name = '$name' AND Password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
      
    header("location: suc.html");
      
    exit();
  } else {

    header("location: error.html");
  
    exit();
  }
}

mysqli_close($conn);
?>

