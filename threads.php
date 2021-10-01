<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- ======================GOOGLE FONTS======================== -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- ========================================================== -->
    <style>
       
     </style>

    <title>ELITES GROUP</title>
  </head>
  <body style="font-family: 'Ubuntu', sans-serif;">
    <!-- ========================================================= -->
    <?php include 'nav.php';?>
    <?php include 'dbconnect.php';?>
    <!-- =============================PHP FOR GET CAT ID AND CATEGORI NAME AND DISC========= -->
    <?php
     $id= $_GET['catid'];
      $sql="SELECT * FROM `categorier` WHERE categories_id=$id";

      $result=mysqli_query($con,$sql);
    
     
      while($row=mysqli_fetch_assoc($result)){

        $catname= $row['categories_name'];
        $catdesc= $row['categories_desc'];
      //  echo $catname;

      }

    ?>
    <!-- ==================FIRST JUMBROTRON========================= -->
    <div class="container my-3 myfonts">
    <div class="jumbotron bg-dark text-white">
  <h1 class="display-4">WELCOME TO THE <?php echo $catname; ?> FOREM</h1>
  <p class="lead"><?php echo $catdesc; ?></p>
  <hr class="my-4">
  <p>No Spam / Advertising / Self-promote not allow. ... Do not post copyright-infringing material. ... Do not post “offensive” posts, links . ... Do not cross post question. ... Remain respectful of other members at all times..</p>
  
</div>
    </div>
    <!-- ============PHP FOR INSTERT QUESTION IN DATABASE================================ -->
    <?php  
  $methot=$_SERVER['REQUEST_METHOD'];
  $alert=false;
  if($methot=='POST'){
    $th_title =$_POST['title'];
    $th_title=str_replace("<","&lt;",$th_title);
    $th_title=str_replace(">","&gt;",$th_title);
    $th_desc= $_POST['desc'];
    $th_desc=str_replace("<","&lt;",$th_desc);
    $th_desc=str_replace(">","&gt;",$th_desc);
    

$my_user_id=0; 
$my_user=$_SESSION['user_email'];
$sql3="SELECT * FROM `eliteuser` WHERE email='$my_user'";
$result3=mysqli_query($con,$sql3);
while($row3=mysqli_fetch_assoc($result3)){
$my_user_id=$row3['user_id'];
}


    $sql="INSERT INTO `threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `time`) VALUES ('$th_title','$th_desc', '$id', '$my_user_id', current_timestamp());";
    $result=mysqli_query($con,$sql);
    if($result){
      $alert=true;
    }
   

    
  } 
?>


    <!-- ======================  HTML  CARD FORM FOR ASK QUESTION============================ -->
    <div class="container my-3 " >
    <div class="container" >
      <!-- ============ PHP FOR DISPLAY ALERT WHEN USER ASK A QUESTION ========== -->
    <?php

if($alert){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success</strong> Thanks for asking Question other users will Answer your Question
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    ?>
    <!-- =============================================== -->
    <div class="card  ">
  <div class="card-header bg-dark">
     <h3 class="text-white text-center">ASK QUESTION</h3>
  </div>
  <div class="card-body">
    <!-- ================================== FORM=================== -->
    <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-left font-weight-bold">Thread Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Thread title" name="title" required>
    <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as possible.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="font-weight-bold">Thread Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3" placeholder="Thread Description" required></textarea>
  </div>
  <?php
  if(!empty($_SESSION['user_email'])){
  echo '<button type="submit" class="btn btn-primary" name="sub">Submit</button> </form>
  </div>';
  }
  else{
    echo '</form> <button class="btn btn-primary " data-toggle="modal" data-target="#sign_modal"  type="submit">Submit</button></div>';

  }
  ?>


    <!-- ================================END FORM====================== -->
  
  <div class="card-footer text-muted bg-dark">
    
  </div>
</div>
    </div>
    </div>
    <!-- ==================================END HTML CARD==================================== -->
    <!-- ===================================PHP FOR DISPLAY QUESTION=================== -->
    <?php
       $sql="SELECT * FROM `threads` WHERE thread_cat_id=$id";
       $result=mysqli_query($con,$sql);
       $noresult=true;
       while($row=mysqli_fetch_assoc($result)){
        $noresult=false;
        $title= $row['thread_title'];
        $desc= $row['thread_desc'];
        $id= $row['thread_id'];
        $user_id=$row['thread_user_id'];
        $time=$row['time'];
        $sql2="SELECT * FROM `eliteuser` WHERE user_id=$user_id";
        $result2=mysqli_query($con,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        $user_name=$row2['email'];
    
    //  ===================================QUESTON ======================== 
  echo '  <div class="container border border-dark  my-2 bg-dark rounded">
    <div class="text-white ">
    <ul class="list-unstyled container-fluid">
  <li class="media  ">
    <img class="mr-3 my-2 rounded-circle" src="img/user3.jpg" width="45px" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 font-weight-bold my-3">'.$user_name.' At '.$time.'</h5>
     
    </div>
  </li>
</ul>
</div>
<div class="container bg-dark text-white">
    <h4 class="text-white">  <a class="text-white" href="thread_answ.php?threadid='.$id.'">'.$title.'</a> </h4>
<p>'.$desc.'</p>
</div>
</div>';
       }
?>
  
    

    <!-- ====================================================================== -->
   
  
    <!-- =================================================================================== -->
    <?php  include'footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  </body>
</html>