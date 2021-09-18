<?php
    $con = mysqli_connect('localhost','root','','facebook');
    $phoneoremail = $_POST['phoneoremail'];

    $check = mysqli_query($con, "DELETE FROM userdata SET password = '$password' WHERE phoneoremail = '$phoneoremail'");

    if($check>0){
        header("Location:http://192.168.0.102/FacebookLogin/mainpage.html");
    }
?>