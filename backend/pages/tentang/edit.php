

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
                                <h3 class="card-title">Edit Tentang</h3>

                            </div>
                            <div class="card-body">
                                <form action="../../action/tentang/update.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nama"
                                            id="nama"
                                            placeholder="Masukan Nama anda"
                                            value="<?= $tentang->nama ?>" />

                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Foto</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            name="foto"
                                            id="foto"
                                            placeholder="Masukan Foto Anda" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="pekerjaan"
                                            id="pekerjaan"
                                            placeholder="Masukan Pekerjaan Anda"
                                            value="<?= $tentang->pekerjaan ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea
                                            class="form-control"
                                            name="deskripsi" 
                                            id="deskripsi" 
                                            rows="5"><?= $tentang->deskripsi ?></textarea>
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        name="tombol"
                                        value="Ubah">
                                        Submit
                                    </button>

                                </form>
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