<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $skill      = escapeString($_POST['skill']);
    $persentase = escapeString($_POST['persentase']);
    

    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storage = "../../../storage/keahlian/";

        if (file_exists($storage . $keahlian->foto)) {
            unlink($storage . $keahlian->foto);
        }
        if (move_uploaded_file($file, $storage . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_keahlian` SET `skill`='$skill',`persentase`='$persentase'$fotoSQL WHERE id=$keahlian->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/keahlian/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/keahlian/edit.php'</script>";
    }
    exit();
}
