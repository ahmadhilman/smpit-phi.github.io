    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $judul ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="content">
        <div class="container-fluid">
          <?= form_open_multipart('admin/profile/pengaturan'); ?>
          <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
          <div class="row">
            <div class="col-lg-12">
    <div class="col-lg-12 col-md-15">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Prosedur & Biaya</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                      <tr><td>Nama Sekolah</td><td> <input type="text" class="form-control" name="nama" id="nama" value="<?= $nama ?>"></td></tr>
                      <tr><td>Nama Sekolah 2</td><td> <input type="text" class="form-control" name="nama_2" id="nama_2" value="<?= $nama_2 ?>"></td></tr>
                      <tr><td>Alamat Sekolah</td><td> <textarea name="alamat" class="f1-about-yourself form-control" ><?= $alamat ?></textarea></td></tr>
                      <tr><td>Tahun Ajaran</td><td> <input type="text" class="form-control" name="t_ajar" id="t_ajar" value="<?= $t_ajar ?>"></td></tr>
                      <tr><td>Email</td><td> <input type="text" class="form-control" name="email" id="email" value="<?= $email ?>"></td></tr>
                      <tr><td>No Telephone</td><td> <input type="text" class="form-control" name="telp" id="telp" value="<?= $telp ?>"></td></tr>
                      <tr><td>Facebook</td><td> <input type="text" class="form-control" name="fb" id="fb" value="<?= $fb ?>"></td></tr>
                      <tr><td>Instagram</td><td> <input type="text" class="form-control" name="instagram" id="instagram" value="<?= $instagram ?>"></td></tr>
                      <tr><td>Twitter</td><td> <input type="text" class="form-control" name="twitter" id="twitter" value="<?= $twitter ?>"></td></tr>
                      <tr><td>Whatsapp</td><td> <input type="text" class="form-control" name="wa" id="wa" value="<?= $wa ?>"></td></tr>
                    
                  </table> 
                  </div>
              </div>
            </div>
              <div class="col-lg-12 col-md-15">
              <div class="card">
              <div class="card-header card-header-info">
                  <center>
                         <button type="submit" class="btn btn-primary"><i class="material-icons"></i> Ubah</button>
</center>
</div>
</div>
                </div>
            </div>
          </div>
      </div>
  </div>
</div>
