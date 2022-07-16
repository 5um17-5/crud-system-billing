
<?php  
require('db.php');

if (isset($_POST['username']) and isset($_POST['password'])){
    
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
//echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header("Location:main.php");

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">


    <title>Store Database</title>
  </head>
  <body>
    
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form name="loginform" action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-primary" name="login" value="Login">
                <input type="reset" class="btn btn-sm btn-primary" name="reset" value="Reset"><br><br>
            </div>
        </form>
    </div>




    

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    
  </body>
</html>