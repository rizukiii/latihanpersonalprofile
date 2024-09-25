<?php
include "../../app.php";
include "./show.php";

$storage = "../../../storage/keahlian/";

if(file_exists($storage . $keahlian->foto)){
    unlink($storage . $keahlian->foto);
}
$query = "DELETE FROM `tb_keahlian` WHERE id=$keahlian->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/keahlian/index.php'</script>";
exit();