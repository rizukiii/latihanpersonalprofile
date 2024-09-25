<?php
include "../../app.php";
include "./show.php";

$storage = "../../../storage/portofolio/";

if(file_exists($storage . $portofolio->foto)){
    unlink($storage . $portofolio->foto);
}
$query = "DELETE FROM `tb_portofolio` WHERE id=$portofolio->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/portofolio/index.php'</script>";
exit();