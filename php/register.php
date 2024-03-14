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
        <a href= index.php>
            <button>Back</button>
        </a>
        <div class="container-fluid">
            <div class="col-md-6 offset-md-3 box">
                <h1><strong>Contact Form</strong></h1>
                <p>Please fill this form and submit to add employee record to the database.</p>
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="mobile" name="mobile" class="form-control">
                    </div>
                    <div class ="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-custom" name="submit" value="Submit">
                </form>
            </div>  
        </div>
    </body>
</html>