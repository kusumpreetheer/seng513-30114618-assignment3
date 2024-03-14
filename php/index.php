<?php
$host = 'db';
$user = 'USER';
$pass = 'PASS';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else {
   echo '<div class="wrapper">
            <div class="message-box">Connected to MySQL server successfully! </div>
         </div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="styles/general.css">
</head>
    <body>
        <div class="container-fluid">
            <div class="col-md-6 offset-md-3 box">
                <div class="row">
                        <img src="styles/openart_logo.png" alt="AI generated image">
                </div>
                <div class="row">
                    <a href = "login.php" class="btn btn-custom">Login</a>
                    <a href = "register.php" class="btn btn-custom">Register</a>
                </div>
            </div>
        </div>
    </body>
</html>
