<?php
$host = 'db';
$user = 'USER';
$pass = 'PASS';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else {
   echo '<div class="wrapper">';
   echo '<div class="message-box"> Connected to MySQL server successfully! </div>';
   echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style type="text/css">
.wrapper{
  width: 500px;
  margin: 0 auto;
}
.message-box {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 10px;
    margin-top: 10px; /* Add margin to create space between the message box and the buttons */
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
.btn-primary {
    background-color: #90A1B2 !important;
    border-color: #90A1B2 !important;
}
.btn-back {
    text-decoration: none; /* Remove underline from the link */
    margin: 10px;
    padding: 10px;
    padding-top: 20px; /* Remove padding from the top */
}
.btn-back button {
    background-color: transparent;
    border: none;
    padding: 0;
}

.btn-back button:hover {
    cursor: pointer;
}
</style>
</head>
    <body>
        <a href="index.php" class="btn-back">
            <button><i class="fas fa-arrow-left"></i></button>
        </a>
        <div class="wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Contact Form</h2>
                    </div>
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
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <div>
    </div>
</html>