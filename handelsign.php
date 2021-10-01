<?php
    include'dbconnect.php';
    $showerror='false';
    $method=$_SERVER['REQUEST_METHOD']=='POST';
     if($method=='POST'){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        if($pass!=$cpass){
            $showerror='Password and confirm password not match';
            header('LOCATION:index.php?success='.$showerror);
         //   echo $showerror;
                exit();
        }else{
            $sql="SELECT * FROM `eliteuser` WHERE email='$email'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_fetch_row($result);
            if($num>0){
                $showerror='Email alredy exists';
                header('LOCATION:index.php?success='.$showerror);
               echo $showerror;
                exit();
            }else{
                $hass=password_hash($pass,PASSWORD_DEFAULT);
                $sql="INSERT INTO `eliteuser` (`email`, `pass`, `time`) VALUES ('$email', '$hass', current_timestamp());";
                $result=mysqli_query($con,$sql);
                if($result){
                    $signsuccess='true';
                header('LOCATION:index.php?success='.$signsuccess.'&email='.$email);
                session_start();
                    $_SESSION['loggedin']==true;
                    $_SESSION['user_email']=$email;
                exit();
                }else{ 
                    $showerror='Somthing went wrong';
                   // $url='index.php?success='.$s.'';
                    header('LOCATION:index.php?success='.$showerror);
                  //  echo $showerror; 
                }
            }
        }
     }else{
         $showerror='Somthing went wrong';
         header('LOCATION:index.php?success='.$showerror);
         echo $showerror;
     }
?>