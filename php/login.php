<?php
    $host = 'db';
    $dbn = 'php-app';
    $user = 'USER';
    $pass = 'PASS';
    $conn = new mysqli($host, $user, $pass,$dbn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="styles/general.css">
</head>
    <body>
        <a href= index.php>
            <button>Back</button>
        </a>
        <div class="container-fluid">
            <div class="col-md-6 offset-md-3 box">
                <h1><strong>Sign Into Application</strong></h1>
                <form action="validate.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class ="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-custom" name="submit" value="Submit">Sign in</button>
                </form>
            </div>  
        </div>
    </body>
</html>