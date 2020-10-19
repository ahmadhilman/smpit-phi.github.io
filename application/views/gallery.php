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

 <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row portfolio-container" data-aos="fade-up">
         <?php foreach($gallery as $g) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?= base_url('assets/img/gallery/'.$g->image) ?>" class="img-fluid" alt="" style="width: 400px">
            <div class="portfolio-info"><a href="<?= base_url('home/detail_gallery/'.$g->id) ?>">
              <h4><?= $g->jdl ?></h4></a>
              <a href="<?= base_url('assets/img/gallery/'.$g->image) ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?= $g->jdl ?>"><i class="bx bx-image"></i></a>
              <a href="<?= base_url('home/detail_gallery/'.$g->id) ?>" class="details-link" title="More Details"><i class="bx bx-show-alt"></i></a>
            </div>
          </div>
        <?php } ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->