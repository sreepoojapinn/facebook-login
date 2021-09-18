<?php
    $con = mysqli_connect('localhost','root','','facebook');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://192.168.0.102/FacebookLogin/mainpage.html");
    }
?>