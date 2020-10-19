<!-- ======= Header ======= -->
<?php $profile = $this->db->get('profile')->result();
        foreach ($profile as $p) {
            $nama = $p->nama;
            $nama_2 = $p->nama_2;
            $fb = $p->fb;
            $instagram = $p->instagram;
        }
?>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
<div class="logo_text mr-auto">
<?= $nama ?><span> <?= $nama_2 ?></span></div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?= base_url('home'); 
?>">Home</a></li>
          <li class="drop-down"><a href="#profil">Profil</a>
            <ul>
              <li><a href="<?= base_url('home/about');?>">Tentang Sekolah</a></li>
              <li><a href="<?= base_url('home/visimisi');?>">Visi & Misi</a></li>
              <li><a href="<?= base_url('home/daftar_guru'); 
?>">Guru Sekolah</a></li>
                            
              <li><a href="<?= base_url('home/daftar_ustadz');?>">Ustadz Pesantren</a></li>
                          </ul>
          </li>
          <li class="drop-down"><a href="#profil">Menu</a>
            <ul>
              <li><a href="<?= base_url('home/berita');?>">Berita Sekolah</a></li>
              <li><a href="<?= base_url('home/gallery'); ?>">Gallery Sekolah</a></li>
                            
              <li><a href="<?= base_url('home/Kegiatan');?>">Kegiatan Sekolah</a></li>
                          </ul>
          </li>
          <li class="drop-down"><a href="<?= base_url('home/pendaftaran');?>">Pendaftaran</a>
            <ul>
              <li><a href="<?= base_url('home/pendaftaran');?>">Pendaftaran</a></li>
              <li><a href="<?= base_url('home/ppdb');?>">Prosedur & Biaya</a></li>
            </ul></li>
          
          <li><a href="<?= base_url('home/kontak')?>">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="<?= $fb ?>" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="<?= $instagram ?>" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->