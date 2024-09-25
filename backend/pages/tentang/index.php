<?php include('../../app.php') ?>

<!doctype html>
<html lang="en">

<?php include('../../components/head.php') ?>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <?php include('../../components/sidebar.php') ?>
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <?php include('../../components/header.php') ?>
            <div class="container-fluid">
                <!--  Row 1 -->
                <?php include "../../action/tentang/show.php" ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h3 class="card-title">Tentang</h3>
                                <a href="./edit.php" class="btn btn-primary ms-auto">Edit Data</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width: 100px;">Nama</th>
                                            <td style="width: 10px;">:</td>
                                            <td><?= $tentang->nama ?></td>
                                        </tr>
                                        <tr>
                                            <th>Foto</th>
                                            <td>:</td>
                                            <td><img src="../../../storage/tentang/<?= $tentang->foto ?>" alt=""
                                                    style="width: 200px; height: 200px; object-fit: cover; object-position: center;" onerror="this.style.display='none'"></td>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan</th>
                                            <td>:</td>
                                            <td><?= $tentang->pekerjaan ?></td>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi</th>
                                            <td>:</td>
                                            <td><?= $tentang->deskripsi ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include('../../components/footer.php') ?>
            </div>
        </div>
    </div>
    <?php include('../../components/script.php') ?>

</body>

</html>