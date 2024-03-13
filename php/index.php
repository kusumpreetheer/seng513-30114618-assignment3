<?php
$host = 'db';
$user = 'USER';
$pass = 'PASS';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else {
   echo "Connected to MySQL server successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
.wrapper{
  width: 500px;
  margin: 0 auto;
}
</style>
</head>
    <body>
        <a href = "login.php"> 
            <button type = "submit">Login</button>
        </a>
        <a href = "register.php"> 
            <button type = "submit">Register</button>
        </a>
    </body>

</html>