<?php include'nav.php'; ?>
<?php include'dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELITES GROUP</title>
</head>
<!-- =========================== PHP FOR GET SEARCH RESULTS==================== -->

<!-- ========================================================================== -->

<body>
    <?php $value=$_GET['search'];
      $nofound=true;
     ?>
<div class="container my-3 " >
    <div class="container" >
     
    <div class="card  ">
  <div class="card-header bg-dark">
     <h3 class="text-white text-center">Search Results For <?php echo $value; ?></h3>
  </div>
  <div class="card-body">
      <!-- =============================PHP FOR GET SEARCH RESULTS============== -->
      <?php
        $value=$_GET['search'];
       $sql="SELECT * FROM `threads` WHERE MATCH(thread_title,thread_desc) against('$value')";
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
        $nofound=false;


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
       if($nofound){
         echo '<div class="container border border-dark  my-2 bg-dark rounded">
         <div class="text-white ">
         <ul class="list-unstyled container-fluid">
       <li class="media  ">
        
         <div class="media-body">
          <ul>
          <li>  Make sure that all words are spelled correctly. </li>
          <li>  Try different keywords. </li>
          <li>  Try more general keywords.
          </li>
          </ul>
          
         </div>
       </li>
     </ul>
     </div>
     <div class="container bg-dark text-white">
        
     </div>
     </div>';

       }
       ?>
    <!-- ================================== FORM=================== -->
  

    <!-- ================================END FORM====================== -->
  
  <div class="card-footer text-muted bg-dark">
    
  </div>
</div>
    </div>
    </div>
</body>
</html>
