<!doctype html>
<html lang="en">

<?php include "../../components/head.php" ?>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <?php include "../../components/sidebar.php" ?>
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <?php include "../../components/header.php" ?>
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h3 class="card-title">Detail Sosmed</h3>
                                <a href="./index.php" class="btn btn-primary ms-auto">Kembali</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <?php include "../../action/sosmed/show.php" ?>
                                        <tr>
                                            <th style="width: 100px;">Foto</th>
                                            <th style="width: 10px;">:</th>
                                            <td><img src="../../../storage/sosmed/<?= $sosmed->foto ?>" alt="foto_sosmed" style="width: 150px; height: 150px; object-fit: cover; object-position: center;" onerror="this.style.display='none'"></th>
                                        </tr>
                                        <tr>
                                            <th>Icon</th>
                                            <th>:</th>
                                            <th><?= $sosmed->icon ?></th>
                                        </tr>
                                        <tr>
                                            <th>Link</th>
                                            <th>:</th>
                                            <th><?= $sosmed->link ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include "../../components/footer.php" ?>
            </div>
        </div>
    </div>
    <?php include "../../components/script.php" ?>
</body>

</html>