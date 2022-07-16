<?php
session_start();
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
    
<?php
if($_SESSION['name']){
?>
  Welcome <?php echo $_SESSION['name']; ?> . Click here to <a href="logout.php" title="Logout"><a href="logout.php">Logout</a></a>
<?php
include('main.php');
?>

<?php
}else echo "<h1>Please Login first <a href='login.php'>Login</a></h1>";
?>
    

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    
  </body>
</html>