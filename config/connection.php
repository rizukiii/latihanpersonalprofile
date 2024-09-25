<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_latihan_personal_profile';

$connect  = new mysqli($hostname, $username, $password, $database);

if($connect->errno){
    die($connect->error);
}