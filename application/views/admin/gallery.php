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
          <div class="col-12"><div class="container-fluid">
<?= form_open_multipart('admin/gallery/isifoto/'.$gallery->id); ?>

              <div class="card card-primary">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Foto</h4>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Keterangan Foto</label>
                           <input type="text" class="form-control" name="keterangan" id="keterangan">
                                       <?= form_error('jdl', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                     
                       </div>
                      <div class="row mb-3">
                      <div class="col-md-12">
                        <div class="form-group">
                                    
                        </div>
                        <label class="bmd-label-floating">Pilih Gambar</label> 
                        <input type="file" class="form-control" id="image" name="image"> 
                            </div></div>
                    
                   
                    
                    <button type="submit" class="btn btn-primary pull-right">Tambah Foto</button>
                    <div class="clearfix mb-3"></div>
                    
                  </form>
                </div>
              </div>
              
            </div>
        </div>
</div>
</div>
</section>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Foto Gallery "<?= $gallery->jdl ?>"
                </div>
              </div>
              <div class="card-body">
                
                <div>
                  <div class="filter-container p-0 row">
                    <?php foreach($gal as $g) { ?>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="<?= base_url('assets/img/gallery/'. $g->foto)  ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="<?= base_url('assets/img/gallery/'. $g->foto)  ?>" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 200px"/><?= $g->keterangan ?>
                        <a href="<?= base_url('admin/gallery/hapusFoto/'.$g->id) ?>" class="btn btn-xs btn-block btn-danger mb-3" ><i class="fas fa-trash"></i></a>
                      </a>
                    </div>
                  <?php } ?>
                   
                  </div>
                </div>

              </div>
            </div>
          </div>
</div>

</div>
</section>
</div>
