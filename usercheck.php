<?php
 
 require_once "connection.php";


?>



<?php


  session_start();
 
 if(isset($_REQUEST['userrole_id'])){


    $userrole_idcheck=$_REQUEST['userrole_id'];
     
    $sql8="SELECT * FROM  `admin` WHERE `admin id`='$userrole_idcheck'
    " ;
    $result8=mysqli_query($con,$sql8);

    $row8=mysqli_num_rows($result8);

    if($row8 == 1){
        $check_role=mysqli_fetch_assoc($result8);
        $check_role_id=$check_role['role'];

        if($check_role_id=='admin'){

             $_SESSION['role_check'] =$check_role_id;

            header('location:dashboard.php');
        }
        else{
             $_SESSION['for user'] = "for user" ;
            header('location:home.php');
        }
    }


 }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>