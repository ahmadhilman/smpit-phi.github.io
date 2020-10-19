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
<?php echo form_open_multipart('admin/jabatan/ubahJabatan/'.$jabatan->id); ?>
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="row">
                       
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jabatan</label>
                           <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $jabatan->jabatan; ?>" required>
                                       <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      </div>
                               </div>
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