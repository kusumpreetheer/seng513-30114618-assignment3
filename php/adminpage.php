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
            echo '<div class="wrapper">'.
            '<div class="message-box" >name:' .
            $row["name"]. " | password:" .
            $row["hash"]. "| phone:" .
            $row["mobile"]. "|  email:" .
            $row["email"]. "| id:" .
            $row["id"]. "<br>".
            '</div>'.
            '</div>';
        }
    }
    else {
        echo '<div class="message-box"> 0 results </div>';
    }
    $conn->close();
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
                <h1><strong>Admin</strong></h1>
                <p>Which user's information would you like to delete?</p>
                <form action="delete.php" method="post">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="number" name="id" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-custom" name="submit" value="Submit">
                </form>
            </div>  
        </div>
    </body>
</html>