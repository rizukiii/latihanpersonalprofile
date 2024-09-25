<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/keahlian/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_keahlian` WHERE id=$id";

$result = $connect->query($query);

$keahlian = $result->fetch_object();

if (!$keahlian) {
    die("Data tidak ada!");
}
