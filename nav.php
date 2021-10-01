<?php 
    include 'login_modal.php';
    include 'sign_modal.php';
  session_start();
  $now_IAM_LOGIN=false;
  if(!empty($_SESSION['user_email'])){
    $now_IAM_LOGIN=true;
  }
  ?>
    
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
        <title>ELITES GROUP</title>
      </head>
      <body>
     
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Elites_Group</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>';
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="under.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider" href="#">SUMIT</div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
    </ul>
      <?php
      echo'
   
   
    <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
      <input class="form-control mr-sm-2 pr-5 " type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-2 mr-sm-2" type="submit">Search</button>
    </form>
    ';
    if($now_IAM_LOGIN){

   
    echo '<button class="btn btn-outline-success  mr-2 " type="submit">'.substr($_SESSION['user_email'],0,12).'</button>
    <a class="btn btn-outline-danger" href="logout.php" tabindex="-1"  aria-disabled="true">LOGOUT</a>
  </div>

</nav>
';
}else{
  echo '<button class="btn btn-outline-success  mr-sm-2 sm-pb-0" data-toggle="modal" data-target="#login_modal" type="submit">LOGIN</button>
  <button class="btn btn-outline-success " data-toggle="modal" data-target="#sign_modal"  type="submit">SIGN UP</button>
</div>

</nav>
';

}
?>

    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
      </body>
    </html>
    
    
   