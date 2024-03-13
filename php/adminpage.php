<?php
    $host = 'db';
    $dbn = 'php-app';
    $user = 'USER';
    $pass = 'PASS';
    $conn = new mysqli($host, $user, $pass,$dbn);
    
    // sql query for admins
    $query = "SELECT * FROM `users`;";

    // fetch data from database
    $result = $conn->query($query);

    if ($result->num_rows  > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "name: " .
            $row["name"]. " | password:" .
            $row["hash"]. "| phone:" .
            $row["mobile"]. "|  email:" .
            $row["email"]. "| id:" .
            $row["id"]. "<br>";
        }
    }
    else {
        echo "0 results";
    }
    $conn->close();
?>