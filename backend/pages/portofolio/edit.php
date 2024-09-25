<!doctype html>
<html lang="en">

<?php include "../../components/head.php" ?>
<?php include "../../app.php" ?>

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
                                <h3 class="card-title">Edit Data Portofolio</h3>
                                <a href="./index.php" class="btn btn-primary ms-auto">Kembali</a>
                            </div>
                            <div class="card-body">
                            <?php include "../../action/portofolio/show.php" ?>
                            <form action="../../action/portofolio/update.php?id=<?= $portofolio->id ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul Project</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="judul"
                                            id="judul"
                                            value="<?= $portofolio->judul ?>"
                                            placeholder="Masukan Judul Project Anda" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Foto Project</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            name="foto"
                                            id="foto"
                                            placeholder="Masukan Foto Project Anda" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi Project</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="deskripsi"
                                            id="deskripsi"
                                            value="<?= $portofolio->deskripsi ?>"
                                            placeholder="Masukan Deskripsi Project Anda" />
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        name="tombol"
                                        value="ubah">
                                        Submit
                                    </button>


                                </form>
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