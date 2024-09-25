<?php 

include "../../app.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    $query = "INSERT INTO `tb_account` (`email`,`password`,`username`) VALUES ('$email','$password','$username')";

    if($connect->query($query) === TRUE){
        echo "<script>window.location.href='../../pages/account/login.php'</script>";
    }else{
       $error = "Error: " . $query . "<br>" . $connect->error;
    }
}