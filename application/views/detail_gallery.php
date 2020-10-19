<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?= $judul ?> " <?= $gal->jdl ?> "</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><?= $judul ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

 <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row portfolio-container" data-aos="fade-up">
         <?php foreach($gallery as $g) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          	<a href="<?= base_url('assets/img/gallery/'.$g->foto) ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?= $g->keterangan ?>">
            <img src="<?= base_url('assets/img/gallery/'.$g->foto) ?>" class="img-fluid" alt="" style="width: 400px">
        </a>
            <div class="portfolio-info">
              <h4><?= $g->keterangan ?></h4>
            </div>
          </div>
        <?php } ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->