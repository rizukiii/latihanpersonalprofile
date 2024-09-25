<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $skill = escapeString($_POST['skill']);
    $persentase = escapeString($_POST['persentase']);

    $foto = escapeString(date('Y-m-d-H.i.s') . ' - ' . $_FILES['foto']['name']);   
    $file = $_FILES['foto']['tmp_name']; 
    $storage = "../../../storage/keahlian/";

    if (move_uploaded_file($file, $storage . $foto)) {
        $query = "INSERT INTO `tb_keahlian` (`skill`, `persentase`, `foto`) VALUES ('$skill','$persentase','$foto')";

        $result = $connect->query($query);
        echo "<script>window.location.href='../../pages/keahlian/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/keahlian/edit.php'</script>";
    }
}
