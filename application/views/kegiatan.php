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

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kegiatan Sekolah</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #ffbb2c;"></i>
              <h3>Tilawah Qur'an</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #5578ff;"></i>
              <h3>Muhadhoroh (Syahril Qur'an)</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #e80368;"></i>
              <h3>PMR & Pramuka</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #e361ff;"></i>
              <h3>Kaligrafi</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #47aeff;"></i>
              <h3>Memimpin Tahlilan</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #ffa76e;"></i>
              <h3>Hadroh</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #11dbcf;"></i>
              <h3>Marawis</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #4233ff;"></i>
              <h3>Study Tour</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #b2904f;"></i>
              <h3>Wisuda Amtsilati</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #b20969;"></i>
              <h3>Wisuda Pasca Amtsilati</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #ff5828;"></i>
              <h3>Isra Mi'raj & Milad PP PHI</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #29cc61;"></i>
              <h3>Bilingual</h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="card" style="width: 1500px">
  <div class="card-header">
    Daftar Kegiatan
  </div>
  <div class="card-body">
    <table class="table table-bordered">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Aktifitas</th>

                    <?php foreach ($kegiatan as $k) {
                    $i = 1; ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k->waktu ?></td>
                            <td><?= $k->aktivitas ?></td>
                          </tr>
                        <?php } ?>
    </table>
  </div>
</div>
        </div>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->