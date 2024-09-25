<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $judul     = escapeString($_POST['judul']);
    $deskripsi = escapeString($_POST['deskripsi']);

    $foto    = escapeString(date('Y-m-d-H.i.s') . ' - ' . $_FILES['foto']['name']);
    $file    = $_FILES['foto']['tmp_name'];
    $storage = "../../../storage/portofolio/";

    if (move_uploaded_file($file, $storage . $foto)) {
        $query = "INSERT INTO `tb_portofolio` (`judul`, `deskripsi`, `foto`) VALUES ('$judul','$deskripsi','$foto')";

        $result = $connect->query($query);
        echo "<script>window.location.href='../../pages/portofolio/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/portofolio/create.php'</script>";
    };
}
