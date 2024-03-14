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
        echo '<script>alert("Registered succesfully")</script>'; 
        // echo $hash;
    } 
    else {
        // echo "Error: " . $sql . ":-" . mysqli_error($conn);
        echo '<script>alert("Please fill out all fields")</script>';  
    }
    mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/general.css">
</head>
<body>
    <a href= index.php>
        <button>Back</button>
    </a>
</body>