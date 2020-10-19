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
          <?= form_open_multipart('admin/profile'); ?>
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
                  <h4 class="card-title">Data Profile</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                      
                      <tr><td>Tentang Sekolah</td><td><textarea name="about"                                     class="f1-about-yourself form-control" id="compose-textarea"><?= $about ?></textarea></td></tr>
                    <tr><td>Visi</td><td><textarea name="visi"                                     class="f1-about-yourself form-control" id="compose-textarea2"><?= $visi ?></textarea></td></tr>
                    <tr><td>Misi</td><td><textarea name="misi"                                     class="f1-about-yourself form-control" id="compose-textarea3"><?= $misi ?></textarea></td></tr>

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
