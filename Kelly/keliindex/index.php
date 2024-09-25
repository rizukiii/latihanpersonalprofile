<?php $title = 'Index'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- kita potong / pangkas komponen" yng berada dalam index agar memudahkan untuk mengubah seluruh page data pada halaman "MISAL KITA INGIN mengubah LOKASI NAVBAR KITA CUKUP MENGGANTINYA DI BAGIAN POTONGAN KOMPONEN AGAR TIDAK MENGUBAHNYA 1 per 1 DI SETIAP HALAMAN , Ini akan membuat efisien waktu dalam bekerja-->
  <?php include "layout/head.php" ?>
</head>

<body class="index-page">


  <main class="main">
    <?php include "layout/nav.php" ?>
  
    <section id="hero" class="hero section">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Kelly Adams</h2>
            <p>I'm a professional illustrator from San Francisco</p>
            <a href="about.html" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section>

  </main>

  <?php include "layout/footer.php" ?>

  <?php include "layout/script.php" ?>



</body>

</html>