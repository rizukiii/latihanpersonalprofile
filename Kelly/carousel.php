<?php include "../backend/app.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <style>
        .carousel-item {
            height: 80vh;
        }
        .carousel-caption h5,
        .carousel-caption p {
            color:aquamarine;
            text-shadow: 1px 1px 2px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide">

            <!-- untuk mengaktifkan carousel slide -->


            <div class="carousel-indicators">
                <?php
                include "../config/connection.php";
                $query = mysqli_query($connect, "SELECT * FROM `tb_keahlian`");
                // ini untuk memanggil class active
                // class active digunakan untuk memberitahu di slide mana yang kita pilih 
                $active = 'active';

                // variable i menyimpan value nol dan dimulai dari nol 
                $i = 0;
                // ini untuk pengulangan menggunakan while
                while ($item = $query->fetch_object()):
                ?>
                    <!-- data-bs-slide-to defaultnya berisi nol -->
                    <!-- aria label=slide default dari bootstrapnya adalah 1 ,maka $i + 1 jadi aslinya 0 bkal ditambah jadi 1 -->
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>" class="<?= $active ?>" aria-current="true" aria-label="Slide <?= ($i + 1) ?>"></button>
                <?php
                    // disini kita panggil lagi $active untuk slide indikator selajutnya atau setelahnya 
                    // mangkanya disini datanya kosong
                    $active = '';
                    // $i++ untuk menambahkan data ke slide berikutnya dengan cara ditambah
                    $i++;
                endwhile
                ?>
            </div>
            <div class="carousel-inner">

                <!-- untuk pemanggilan carousel ke front end-->
                 
                <?php
                // pemanggilan seperti biasa 
                include "../backend/app.php";
                $query = mysqli_query($connect, "SELECT * FROM `tb_keahlian`");
                $active = 'active';
                while ($item = $query->fetch_object()):
                ?>
                    <div class="carousel-item <?= $active ?>">
                        <img src="../storage/keahlian/<?= $item->foto ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $item->skill ?></h5>
                            <p><?= $item->persentase ?></p>
                        </div>
                    </div>
                <?php $active = '';
                endwhile; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>