<!doctype html>
<html lang="en">
<?php 
include "../../app.php";
session_start();


?>
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
                            <div class="card-header">
                                <h3 class="card-title">Account</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width: 100px;">Username</th>
                                            <th style="width: 10px;">:</th>
                                            <th><?= $_SESSION['username'] ?></th>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <th>:</th>
                                            <th><?= $_SESSION['email'] ?></th>
                                        </tr>
                                        <th>Password</th>
                                        <th>:</th>
                                        <th><?= $_SESSION['password'] ?></th>
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