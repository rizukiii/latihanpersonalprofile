

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
                                <h3 class="card-title">Portofolio</h3>
                                <a href="./create.php" class="btn btn-primary ms-auto">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Foto</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th></th>
                                            <th>Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include "../../action/portofolio/showAll.php" ?>
                                        <?php $no = 1;
                                        while ($item = $result->fetch_object()): ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><img src="../../../storage/portofolio/<?= $item->foto ?>" alt="foto portofolio" style="width: 150px; height: 150px; object-fit: cover; object-position: center;" onerror="this.style.display='none'"></td>
                                                <td><?= $item->judul ?></td>
                                                <td><?= $item->deskripsi ?></td>
                                                <td style="width: 5%;"><a href="detail.php?id=<?= $item->id ?>"><i class="fa-solid fa-circle-info btn btn-info"></i></a></td>
                                                <td style="width: 5%;"><a
                                                        href="edit.php?id=<?= $item->id ?>"><i class="fa-solid fa-pen btn btn-warning"></i></a></td>
                                                <td style="width: 5%;"><a
                                                        href="../../action/portofolio/destroy.php?id=<?= $item->id ?>" onclick="return confirm('Apakah Anda Yakin?')"><i class="fa-solid fa-ban btn btn-danger"></i></a></td>
                                            </tr>
                                        <?php endwhile; ?>
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