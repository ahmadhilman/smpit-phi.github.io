<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
     <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Visi dan Misi</strong></h2>
        </div>
<?php foreach ($profile as $g) ?>
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <center><h2>Visi</h2></center>
            <h4><?= $g->visi ?></h4>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <center><h2>Misi</h2></center>
            <h4><?= $g->misi ?></h4>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->