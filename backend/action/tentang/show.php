<?php 

$query = "SELECT * FROM `tb_tentang` WHERE id=1 LIMIT 1";

$result = $connect->query($query);

$tentang = $result->fetch_object();

if (!$tentang){
    die("data tidak ada !");
}