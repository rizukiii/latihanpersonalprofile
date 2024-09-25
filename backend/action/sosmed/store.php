<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $icon = escapeString($_POST['icon']);
    $link = escapeString($_POST['link']);

    $foto    = escapeString(date('Y-m-d-H.i.s') . ' - ' . $_FILES['foto']['name']);
    $file    = $_FILES['foto']['tmp_name'];
    $storage = "../../../storage/sosmed/";

    if (move_uploaded_file($file, $storage . $foto)) {
        $query = "INSERT INTO `tb_sosmed` (`icon`, `link`, `foto`) VALUES ('$icon','$link','$foto')";

        $result = $connect->query($query);
        echo "<script>window.location.href='../../pages/sosmed/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/sosmed/edit.php'</script>";
    }
}
