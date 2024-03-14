<?php
    $host = 'db';
    $dbn = 'php-app';
    $user = 'USER';
    $pass = 'PASS';
    $conn = new mysqli($host, $user, $pass,$dbn);
    if(isset($_POST['submit']))
    {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    // hashing using php's default hashing function
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name,email,mobile,hash)VALUES    ('$name','$email','$mobile', '$hash')";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="wrapper">';
        echo '<div class="message-box"> Registered Successfully </div>';
        echo '</div>'; 
        // echo $hash;
    } 
    else {
        // echo "Error: " . $sql . ":-" . mysqli_error($conn);
        echo '<div class="wrapper">';
        echo '<div class="message-box"> Please fill out all fields </div>';
        echo '</div>';  
    }
    mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<html lang="en">
<style>
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
    .alert.dialog{
        background-color: #FFF3E6;
        padding: 20px;
        margin: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
<head>
    <meta charset="UTF-8">
</head>
<body>
    <a href="index.php" class="btn-back">
        <button><i class="fas fa-arrow-left"></i></button>
    </a>
</body>