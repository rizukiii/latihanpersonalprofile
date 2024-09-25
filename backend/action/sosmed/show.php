<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/sosmed/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_sosmed` WHERE id=$id";

$result = $connect->query($query);

$sosmed = $result->fetch_object();

if (!$sosmed) {
    die('Data Tidak Ditemukan!');
}
