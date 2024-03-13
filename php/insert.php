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
    echo "New record has been added successfully !";
    // echo $hash;
    } 
    else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
?>