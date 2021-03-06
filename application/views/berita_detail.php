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

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry" data-aos="fade-up">

              <div class="row portfolio-container" data-aos="fade-up">
          <?php foreach ($berita as $b) { ?>
          <div class="col-lg-12 col-md-4 portfolio-item mb-5 filter-<?= $b->kategori ?>"><a href="<?= base_url('assets/img/berita/'.$b->image) ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?= $b->jdl ?>">
            <img src="<?= base_url('assets/img/info/'.$b->image) ?>" class="img-fluid" alt="" style="width: 800px; height: 400px">
        </a>
            <div class="portfolio-info">
              <h4><?= $b->jdl ?></h4>
              <time datetime="<?= $b->tgl_input ?>">ADMIN | <?= $b->tgl_input ?></time>
              <p><?= $b->isi ?></p>
              
            </div>
          </div>
        <?php } ?>
        </div>
            </article><!-- End blog entry -->

           
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
              	<?php foreach($ber as $b) { ?>
                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/img/info/'.$b->image) ?>" alt="" style="width: 80px; height: 50px">
                  <h4><a href="<?= base_url('home/berita_detail/'.$b->id_ber) ?>"><?= substr(strip_tags($b->isi),0,40) ?>...</a></h4>
                  <time datetime="<?= $b->tgl_input ?>"><?= $b->tgl_input ?></time>
                </div>
                <?php } ?>
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
