<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $icon      = escapeString($_POST['icon']);
    $link = escapeString($_POST['link']);
    

    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storage = "../../../storage/sosmed/";

        if (file_exists($storage . $sosmed->foto)) {
            unlink($storage . $sosmed->foto);
        }
        if (move_uploaded_file($file, $storage . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_sosmed` SET `icon`='$icon',`link`='$link'$fotoSQL WHERE id=$sosmed->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/sosmed/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/sosmed/edit.php'</script>";
    }
    exit();
}
