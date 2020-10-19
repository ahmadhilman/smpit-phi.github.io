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
<?= form_open_multipart('admin/berita/ubahBerita/'. $berita->id_ber); ?>

          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="row">
                       
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul Berita</label>
                           <input type="text" class="form-control" name="jdl" id="jdl" value="<?= $berita->jdl ?>">
                                       <?= form_error('jdl', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                     
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kategori</label>
                           <select name="kategori" class="form-control form-control-user">
                            <option value="<?= $kat->kategori ?>"><?= $berita->kategori ?></option>
                            <?php
                            foreach ($kategori as $k) { ?>
                                <option value="<?= $k['id_kat'];?>"><?= $k['kategori'];?></option>
                            <?php } ?>
                        </select>
            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>                         </div>
                      </div></div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                                    
                         <img src="<?= base_url('assets/img/info/') . $berita->image; ?>" class="img-thumbnail" alt="" style="width:129px;height:129px;"> </div>
                        <label class="bmd-label-floating">Pilih Gambar</label> 
                        <input type="file" class="form-control" id="image" name="image"> 
                            </div></div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group" >
                          <label class="bmd-label-floating">Isi Berita</label>
                                     <textarea name="isi" id="compose-textarea" class="form-control" value="<?= $berita->isi ?>"><?= $berita->isi ?></textarea>
            <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">Ubah Berita</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
