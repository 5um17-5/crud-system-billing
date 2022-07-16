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
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="main.php">Store Database</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="main.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Purchase <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Store Accounts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="name.php">Name information</a>
          <a class="dropdown-item" href="purchase.php">Purchase</a>
          <a class="dropdown-item" href="payment.php">Payment</a>
          <a class="dropdown-item" href="creditlist.php">Credit list</a>
          <a class="dropdown-item" href="creditcollection.php">Credit collection</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="report.php">Report</a>
        </div>
      </li>
    </ul>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">Logout</a></button>
  </div>
</nav>


<div class="container">
  <br>
  <a href="add_purchase_bills.php"><button class="btn btn-outline-success btn-sm">Add Purchase bills</button></a> <button class="btn btn-outline-success btn-sm">Check Purchase History</button>
</div>


    

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    

    
  </body>
</html>