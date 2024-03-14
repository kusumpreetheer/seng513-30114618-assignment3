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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style type="text/css">
.wrapper{
  width: 500px;
  margin: 0 auto;
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
                    <h2>Login</h2>
                    </div>
                        <form action="validate.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class ="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Login </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <div>
    </div>
</html>