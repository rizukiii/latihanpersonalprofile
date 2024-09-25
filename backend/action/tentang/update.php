<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $nama      = escapeString($_POST['nama']);
    $pekerjaan = escapeString($_POST['pekerjaan']);
    $deskripsi = escapeString($_POST['deskripsi']);

    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storage = "../../../storage/tentang/";

        if (file_exists($storage . $tentang->foto)) {
            unlink($storage . $tentang->foto);
        }
        if (move_uploaded_file($file, $storage . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_tentang` SET `nama`='$nama',`deskripsi`='$deskripsi',`pekerjaan`='$pekerjaan'$fotoSQL WHERE id=$tentang->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/tentang/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/tentang/edit.php'</script>";
    }
    exit();
}
