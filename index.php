<?php include'nav.php';
  include'dbconnect.php';
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
<?php 
        $user_success=false;
        $user_somthing1=false;
        $not_match=false;
        $exists=false;
        if(isset($_GET['success'])=='true' && isset($_GET['email'])){
            $username=$_GET['email'];
            
            $usermassage='Welcome '.$username;
            $user_success=true;
            //echo $usermassage;
            
            
        }elseif(isset($_GET['success'])=='Somthing went wrong'){
            $usermassage=$_GET['success'];
            $user_somthing1=true;
        }elseif(isset($_GET['success'])=='Password and confirm password not match'){
            $usermassage=$_GET['success'];
            $not_match=true;
        }elseif(isset($_GET['success'])=='Email alredy exists'){
            $usermassage=$_GET['success'];
            $exists=true;

        }
    ?>
    <!-- ====================================== for login massage================== -->
    <?php
    $lognot_match=false;
    $lognot_exist=false;
        if(isset($_GET['result'])=='password not match'){
            $log_massage=$_GET['result'];
            $lognot_match=true;
        }elseif(isset($_GET['result'])=='user email not exists'){
            $log_massage=$_GET['result'];
            $lognot_exist=true;
        }
        ?>
        <!-- =============================================================== -->


<!-- ============================================================================================ -->

    <?php 
       
            

            if($user_success){
                echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>SUCCESS</strong> '.$usermassage.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }elseif($user_somthing1){
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>ERROR</strong> '.$usermassage.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }elseif($not_match){
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>ERROR</strong> '.$usermassage.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }elseif($exists){
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>ERROR</strong> '.$usermassage.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
            // ==================== MASSAGE FOR LOGIN=======================
            if($lognot_match){
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>ERROR</strong> '.$log_massage.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }elseif($lognot_exist){
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>ERROR</strong> '.$log_massage.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }

        
    ?>
    <?php include 'dbconnect.php'; ?>

  

    

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">   
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated bounce">Welcome to icoder</h2>
          <p>Technology News, Devlopment and Trands</p>
          <a class="btn btn-danger" href="indexnews.php">Technology</a>
          <button class="btn btn-primary">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>The best coading blog</h2>
          <p>Technology News, Devlopment and Trands</p>
          <!-- <a class="btn btn-danger" href="http://google.com">Technology</a> -->
        
          <button class="btn btn-primary">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Award winning blog</h2>
          <p>Technology News, Devlopment and Trands</p>
          <a class="btn btn-danger" href="indexnews.php">Technology</a>
          <button class="btn btn-primary">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <!-- ======================================================== -->
    <div class="container my-4">
    <div class="row mb-2">
    
            <?php

            $sql = "SELECT * FROM `categorier`";

            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['categories_name'];
                $desc = $row['categories_desc'];
                $id   = $row['categories_id'];


                echo '  <div class="col-md-6">
                <div
                  class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                
                <h3 class="mb-0">'.$name.'</h3>
                
                <p class="card-text mb-auto">'.substr($desc,0,80).'</p>
                <a href="threads.php?catid='.$id.'" class="stretched-link">View Threads</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="img/8.jpg" width="200" height="250" alt="">
              </div>
            </div>
          </div>';
            }


            ?>
        </div>
    </div>
    </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <?php  include'footer.php'; ?>
   
</body>

</html>

<?php

?>