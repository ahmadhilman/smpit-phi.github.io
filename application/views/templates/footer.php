
  <!-- ======= Footer ======= -->
  <?php $profile = $this->db->get('profile')->result();
        foreach ($profile as $p) {
            $nama = $p->nama;
            $nama_2 = $p->nama_2;
            $alamat = $p->alamat;
            $telp = $p->telp;
            $email = $p->email;
            $fb = $p->fb;
            $instagram = $p->instagram;
            $tw = $p->twitter;
            $wa = $p->wa;
        }
?>

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><?= $nama ?> <?= $nama_2 ?></h3>
            <p>
              <?= $alamat ?><br>
              <strong>Phone:</strong> <?= $telp ?><br>
              <strong>Email:</strong> <?= $email ?><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Created by <a href="https://bootstrapmade.com/">A. Hilman romadlan</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="<?= $tw ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?= $fb ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?= $instagram ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<a href="<?= $wa ?>" class="back-to-telp" ><i class="icofont-whatsapp"></i></a>
  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/') ?>js/loader.js"></script>
  <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url('unicat/') ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url('unicat/') ?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url('unicat/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url('unicat/') ?>plugins/easing/easing.js"></script>
<script src="<?= base_url('unicat/') ?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url('unicat/') ?>js/custom.js"></script>
<script src="<?= base_url('assets/') ?>js/loader.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>