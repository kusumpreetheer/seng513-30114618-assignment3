<?php
    $host = 'db';
    $dbn = 'php-app';
    $user = 'USER';
    $pass = 'PASS';
    $conn = new mysqli($host, $user, $pass,$dbn);
    $password = $_POST['password'];
    $name = $_POST['name'];
    if(isset($_POST['submit']))
    {
    }
    // sql query for admins
    $query = "SELECT * FROM `admins`;";
    // fetch data from database
    $result = $conn->query($query);
    if ($result->num_rows  > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if ($name == $row["name"] && $password == $row["hash"]){
                header("Location: ./adminpage.php");
                exit();
            }
            else {
                echo '<div class="message-box"> no records found with this usename/password </div>';
            }
        }
    }
    else {
        echo '<div class="message-box"> 0 results </div>';
    }
    $conn->close();
?>