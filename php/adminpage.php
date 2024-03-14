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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style type="text/css">
.wrapper{
  width: 700px;
  margin: 0 auto;
}
.message-box {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 20px;
    margin-top: 10px; /* Add margin to create space between the message box and the buttons */
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

.btn-success {
    background-color: #90A1B2 !important;
    border-color: #90A1B2 !important;
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
                    <h2>Admin</h2>
                    </div>
                        <p>Which user's information would you like to delete?</p>
                        <form action="delete.php" method="post">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="number" name="id" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success btn-primary" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <div>
    </div>
</html>