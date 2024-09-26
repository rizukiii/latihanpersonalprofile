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
                                <h3 class="card-title">Edit Sosmed</h3>
                                <a href="index.php" class="btn btn-primary ms-auto">Kembali</a>
                            </div>
                            <div class="card-body">
                                <?php include "../../action/sosmed/show.php" ?>
                                <form action="../../action/sosmed/update.php?id=<?php $sosmed->id ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Masukan Foto</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            name="foto"
                                            id="foto"
                                            placeholder="Masukan Foto Anda" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="icon" class="form-label">Icon</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="icon"
                                            id="icon"
                                            placeholder="Masukan Icon" 
                                            value="<?= $sosmed->icon ?>"/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="link" class="form-label">Link</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="link"
                                            id="link"
                                            placeholder="Masukan Link" 
                                            value="<?= $sosmed->link ?>"/>
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