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
<?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="<?= base_url('admin/gallery/tambah') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah gallery</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul gallery</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i = 1;
                    foreach ($gallery as $a) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $a->jdl; ?></td>
                            <td align="center">
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/gallery/') . $a->image; ?>" class="img-fluid img-thumbnail" alt="..." style="width:100px;height:100px;"><br>
                                    <a href="<?= base_url('admin/gallery/isifoto/'.$a->id) ?>"><i class="fas fa-image"></i>(<?= $a->jml_foto ?>) foto</a>
                                </picture>
                            </td>
                           
                            <td>
                            <a href="<?= base_url('admin/gallery/ubahgallery/').$a->id;?>" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i></a>
                            <a href="<?= base_url('admin/gallery/hapusgallery/').$a->id;?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a->jdl;?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
</div>