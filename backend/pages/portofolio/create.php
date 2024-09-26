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
                                <h3 class="card-title">Tambah Data Portofolio</h3>
                                <a href="./index.php" class="btn btn-primary ms-auto">Kembali</a>
                            </div>
                            <div class="card-body">
                                <form action="../../action/portofolio/store.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Nama Project</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="judul"
                                            id="judul"
                                            placeholder="Masukan Judul Project" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Masukan Foto Project</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            name="foto"
                                            id="foto"
                                            placeholder="Masukan Foto Project" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="deskripsi"
                                            id="deskripsi"

                                            placeholder="Masukan Deskripsi Project" />
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        name="tombol"
                                        value="simpan">
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