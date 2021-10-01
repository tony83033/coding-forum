
<?php
include'nav.php';
include'dbconnect.php';


?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>icoder -Heaven for programmers</title>
</head>

<body>
  
  






  <div class="container my-4">

  <?php
    $success=false;

    if(isset($_GET['result'])=='ok'){
      echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      <strong>SUCCESS</strong> Thanks for contacting us we will respond you on your email
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }elseif(isset($_GET['result'])=='issue'){
      echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
      <strong>SUCCESS</strong> sorry having some technical issue on website 
      please try again later
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';

    }
  ?>

  
    <h2> Contact us </h2>
    <form action="handel-contact.php" method="post">
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">select Your Query</label>
        <select class="form-control" id="exampleFormControlSelect1" name="query-type">
          <option>Web</option>
          <option>Tech</option>
          <option>Code</option>
          <option>other</option>
        </select>
      </div>
      <div class="form-group row">
        <div class="col-sm-2">Are you a mameber</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1" name="member">
            <label class="form-check-label" for="gridCheck1">
              yes
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">

        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Elaborate your Concern</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="concern"></textarea>
      </div>
      <button class="btn btn-primary" type="submit" name="sub">Submit</button>
    </form>
  </div>

  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2020 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>