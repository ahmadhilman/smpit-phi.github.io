<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?= $judul ?></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><?= $judul ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    </section><!-- End Features Section -->
<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up" align="center">
<div class="col-lg-8">
        <div class="row" >
          <div class="card" style="width: 800px;">
  <div class="card-header">
    Tentang Sekolah
  </div>
  <div class="card-body">
    <?php foreach ($profile as $p) { ?>
      
    <?= $p->about ?>
  <?php } ?>
  </div>
</div>
        </div>
</div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->