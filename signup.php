<?php
    $con = mysqli_connect('localhost','root','','facebook');
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http:192.168.0.102//localhost/FacebookLogin");
    }
    else{
        $input = mysqli_query($con,"INSERT INTO userdata (id,firstname,lastname,phoneoremail,password) VALUES ('$id','$firstname','$lastname','$phoneoremail','$password')");
        if($input){
            header("Location:http://192.168.0.102/FacebookLogin/mainpage.html");
        }
    }

?>