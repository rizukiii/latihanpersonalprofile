<?php

include "../../app.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `tb_account` WHERE email ='$email' AND `password`='$password'";

    $result = $connect->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $row = $result->fetch_object();
        $_SESSION['username'] = $row->username;
        echo "<script>window.location.href='../../pages/account/index.php'</script>";
    } else {
        $error = "Your Email And Password incorrect";
    }
}
