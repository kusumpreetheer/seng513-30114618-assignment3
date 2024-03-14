<?php
$host = 'db';
$user = 'USER';
$pass = 'PASS';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else {
   echo '<div class="wrapper">';
   echo '<div class="message-box">Connected to MySQL server successfully! </div>';
   echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">

.body{
   
}
.wrapper{
  width: 100%;
  height: 30vh; /* Set the height to 100% of the viewport height */
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column; /* Center content vertically */
}
.btn-custom {
    background-color: #90A1B2 !important;
    border-color: #90A1B2 !important;
    padding: 15px 30px; /* Increase padding to make the buttons bigger */
    font-size: 18px; /* Increase font size */
    margin-right: 10px; /* Add margin to create a gap between buttons */
}
.btn-success {
    background-color: #90A1B2 !important;
    border-color: #90A1B2 !important;
    padding: 15px 30px; /* Increase padding to make the buttons bigger */
    font-size: 18px; /* Increase font size */
}
.message-box {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 10px;
    margin-top: 10px; /* Add margin to create space between the message box and the buttons */
    width: 300px; /* Set the width of the message box */
    text-align: center; /* Center text horizontally */
}
</style>
</head>
    <body class="body">
        <div class="wrapper">
            <div class="flex">
                <a href="login.php" class="btn btn-primary btn-custom">Login</a>
                <a href="register.php" class="btn btn-success btn-success">Register</a>
            </div>
        </div>
    </body>
</html>
