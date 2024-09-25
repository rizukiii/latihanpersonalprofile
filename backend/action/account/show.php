<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/account/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_account` WHERE id=$id";

$result = $connect->query($query);

$portofolio = $result->fetch_object();

if (!$portofolio) {
    die("Data Tidak Ditemukan!");
}