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
<?= form_open_multipart('admin/guru/ubahGuru/'.$guru->nip); ?>

          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="row">
                       
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                           <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $guru->nama; ?>">
                                       <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                     
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tempat Lahir</label>
                                     <input type="text" class="form-control" id="tpt_lhr" name="tpt_lhr" value="<?= $guru->tpt_lhr; ?>"> 
            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?= $guru->tgl_lhr; ?>"> 
            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>                         </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor Telepon</label>
                          <input type="text" class="form-control" id="telp" name="telp" value="<?= $guru->telp; ?>"> 
            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Kelamin</label><select name="jk" class="form-control">
                             <option value="<?= $guru->jk; ?>"><?= $guru->jk;?></option>                             <?php                             $k= ['laki-laki','perempuan'];                             for ($i=0;$i<2;$i++) { ?>                                 <option value="<?= $k[$i];?>"><?= $k[$i];?></option>                             <?php } ?>                         </select>            
                             <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                          <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Pengajar</label><select name="level" class="form-control">
                             <option value="<?= $guru->level; ?>"><?= $guru->level;?></option>                             <?php                             $k= ['guru','ustadz'];                             for ($i=0;$i<2;$i++) { ?>                                 <option value="<?= $k[$i];?>"><?= $k[$i];?></option>                             <?php } ?>                         </select>            
                             <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mengajar</label>
                           <select name="ajar" class="form-control form-control-user">
                            <option value="<?= $guru->ajar; ?>"><?= $guru->ajar; ?></option>
                            <?php
                            foreach ($pelajaran as $k) { ?>
                                <option value="<?= $k['pelajaran'];?>"><?= $k['pelajaran'];?></option>
                            <?php } ?>
                        </select>
            <?= form_error('ajar', '<small class="text-danger pl-3">', '</small>'); ?>                         </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jabatan</label>
                                                  <select name="jabatan" class="form-control form-control-user">
                            <option value="<?= $g->jabatan; ?>"><?= $guru->jabatan; ?></option>
                            <?php
                            foreach ($jabatan as $j) { ?>
                                <option value="<?= $j['id'];?>"><?= $j['jabatan'];?></option>
                            <?php } ?>
                        </select>
            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group" >
                          <label class="bmd-label-floating">Alamat</label>
                                     <input type="text" class="form-control" type="text" id="alamat" name="alamat" value="<?= $guru->alamat?>"> 
            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                                    
                        <img src="<?= base_url('assets/img/guru/') . $guru->image; ?>" class="img-thumbnail" alt="" style="width:129px;height:129px;"> </div>
                        <label class="bmd-label-floating">Pilih Foto</label> 
                        <input type="file" class="form-control" type="text" id="image" name="image"> 
                            </div></div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>