<?php
include ('database.php');
?>

<!DOCTYPE html>
<head>
    <title>National Geographic | Subscription</title>
    <link rel="stylesheet" href="./subcribe.css">
    <script src="subscribe.js"></script>
</head>
<body>
    <a href="/website.html"><img id="logo" src="/images/National-Geographic-logo.png" alt="logo"><br><br><br><br><br><br></a>
<form id="registrationForm" action="subscribe.php" method="post">
    <label>Username:</label>
    <input type="text" name="name" id="name" placeholder="Username" required><br>
    <label>E-mail:</label>
    <input type="text" id="email" placeholder="E-mail" required><br>
    <label>Phone Number:</label>
    <input type="text" id="phone" placeholder="Phone Number" required><br>
    <label>Sex:</label>
    <input type="radio" id="male">
    <label for="male">Male</label>
    <input type="radio" id="female">
    <label>Female</label><br><br>
    <label>Date of Birth:</label>
    <input type="date"><br><br>
    <label>Languages Known:</label>
    <input type="checkbox" id="hindi">
    <label>English</label>
    <input type="checkbox" id="english">
    <label>Hindi</label>
    <input type="checkbox" id="sanskrit">
    <label>Sanskrit</label><br><br>
    <label>Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" required><br>
    <label>Address:</label>
    <textarea id="address" rows="4" cols="50" placeholder="Address"></textarea><br>
    <input type="submit">
    <input type="reset">
    <p>This email and password lets you seamlessly log into services and experiences of National Geographic.</p>
    <p>Already Signed up? <a href="/login/login.php">Login</a></p>
    <p>Need Help? <a href="#">Contact Us</a></p>
    <p>Email: support@gmail.com; Phone: +91-123-456-7890</p>
</form>
<footer>
    <p>For print subscriptions, one-year subscription includes 12 monthly issues of National Geographic magazine. A digital account must be set up on nationalgeographic.com in order to access digital content including full online archive. Digital account holders must be at least 16 years of age. For Indian Rupees, charges originate in Indian funds and convert to local currency at the exchange rate applicable on transaction date. All offers valid for orders going to International addresses only. For new print subscription orders, please allow 4-8 weeks for delivery of the first print issue. Basic Annual Rate: UK price: £59. ROI price: €55.00. Australia price: A$95. New Zealand price: NZD$100. Includes applicable taxes.</p>
    <p><strong>Copyright &copy; Lakshya Pawar & Navodit Kapoor IT-4C</strong></p>
</footer>
</body>
</html>

<?php

$username = $_POST["name"];
$password = $_POST["password"];

// $hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO subscribe (Name, Password)
        VALUES('$username', '$password')";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>