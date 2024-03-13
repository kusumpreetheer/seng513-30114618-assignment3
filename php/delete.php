<?php
    $host = 'db';
    $dbn = 'php-app';
    $user = 'USER';
    $pass = 'PASS';
    $conn = new mysqli($host, $user, $pass,$dbn);
    if(isset($_POST['submit']))
    {
    $id = $_POST['id'];
    $sql = $conn->prepare("DELETE FROM users WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute(); 
    header("Location:./adminpage.php");
    }
?>