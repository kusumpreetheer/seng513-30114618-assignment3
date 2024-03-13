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
        <a href= index.php>
            <button>Back</button>
        </a>
        <div class="wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Admin</h2>
                    </div>
                        <p>Which user's information would you like to delete?</p>
                        <form action="delete.php" method="post">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="number" name="id" class="form-control">
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