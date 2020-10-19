<main id="main">

    <!-- ======= Breadcrumbs ======= -->
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

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><?= $judul ?> <strong><?= $judul_d ?></strong></h2>
         
        </div>

        <div class="row">
<?php foreach ($guru as $g) { ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="<?= base_url('assets/img/guru/'.$g->image) ?>" class="img-fluid" alt="" style="width: 270px; height: 270px" >
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?= $g->nama ?></h4>
                <span>(<?= $g->jabatan ?>)</span>
                <h6><?= $g->ajar ?></h6>
              </div>
            </div>
          </div>
<?php } ?>
        </div>

      </div>
    </section><!-- End Our Team Section -->

  </main><!-- End #main -->