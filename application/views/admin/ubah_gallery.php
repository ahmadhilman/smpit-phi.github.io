                        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $judul ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<?= form_open_multipart('admin/gallery/ubahgallery/'. $gallery->id); ?>

          <div class="row">
            <div class="col-md-8">
              <div class="card card-primary">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ubah gallery</h4>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul gallery</label>
                           <input type="text" class="form-control" name="jdl" id="jdl" value="<?= $gallery->jdl ?>">
                                       <?= form_error('jdl', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                     
                       </div>
                      <div class="row mb-3">
                      <div class="col-md-12">
                        <div class="form-group">
                                    
                         <img src="<?= base_url('assets/img/gallery/') . $gallery->image; ?>" class="img-thumbnail" alt="" style="width:129px;height:129px;"> </div>
                        <label class="bmd-label-floating">Pilih Gambar</label> 
                        <input type="file" class="form-control" id="image" name="image"> 
                            </div></div>
                    
                    
                    
                    <button type="submit" class="btn btn-primary pull-right">Ubah gallery</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>