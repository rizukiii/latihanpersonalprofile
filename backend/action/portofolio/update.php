<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $judul      = escapeString($_POST['judul']);
    $deskripsi = escapeString($_POST['deskripsi']);
    

    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storage = "../../../storage/portofolio/";

        if (file_exists($storage . $portofolio->foto)) {
            unlink($storage . $portofolio->foto);
        }
        if (move_uploaded_file($file, $storage . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_portofolio` SET `judul`='$judul',`deskripsi`='$deskripsi'$fotoSQL WHERE id=$portofolio->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/portofolio/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/portofolio/edit.php'</script>";
    }
    exit();
}
