<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'dbconnect.php';
        $member="";
        $email=$_POST['email'];
        $query=$_POST['query-type'];
        $concern=$_POST['concern'];
        $member1=$_POST['member'];
        if($member1=="on"){
            $member="yes";
        }elseif($member1==""){
            $member="no";
        }

        $sql="INSERT INTO `cantact` (`email`, `query_type`, `member`, `concern`, `id`) VALUES ('$email', '$query', '$member', '$concern', NULL);";

        $result=mysqli_query($con,$sql);
        if($result){
            header('LOCATION:contact.php?result=ok');
        }else{
            header('LOCATION:contact.php?result=issue');
        }
    }
?>