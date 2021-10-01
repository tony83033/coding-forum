<?php


    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'dbconnect.php';
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $sql="SELECT * FROM `eliteuser` WHERE email='$email'";
        $result=mysqli_query($con,$sql);
        //echo $result;
        $num=mysqli_num_rows($result);
    
        if($num==1){
                $row=mysqli_fetch_assoc($result);
                if(password_verify($pass,$row['pass'])){
                   // echo "Success";
                    session_start();
                  //  $_SESSION['loggedin']==true;
                    $_SESSION['user_email']=$email;
                  header("LOCATION:index.php");
                    exit();
                }else{
                    //echo "password not match";
                    header("LOCATION:index.php?result=password not match");
                }

        }else{
            echo "user email not exists";
            header("LOCATION:index.php?result=user email not exists");
        }

    }
    
?>