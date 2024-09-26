

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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h3 class="card-title">Keahlian</h3>
                                <a href="./index.php" class="btn btn-primary ms-auto">Kembali</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <?php include "../../action/keahlian/show.php" ?>
                                        <tr>
                                            <th style="width: 100px;">Foto</th>
                                            <td style="width: 10px;">:</td>
                                            <td><img
                                                    src="../../../storage/keahlian/<?= $keahlian->foto ?>"
                                                    alt="foto keahlian"
                                                    style="width: 200px; height: 200px; object-fit: cover; object-position: center;" onerror="this.style.display='none'"></td>
                                        </tr>
                                        <tr>
                                            <th>Keahlian</th>
                                            <td>:</td>
                                            <td><?= $keahlian->skill ?></td>
                                        </tr>
                                        <tr>
                                            <th>Persentase</th>
                                            <td>:</td>
                                            <td><?= $keahlian->persentase ?></td>
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