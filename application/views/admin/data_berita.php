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
          <div class="row">
            <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="col-lg-12 col-md-15">
              <div class="card">
                 <div class="card-header card-header-info">
                  <p class="card-category">            
                    <a href="<?= base_url('admin/berita/tambah')?>" class="btn btn-primary btn-sm" ><i class="material-icons"></i> Tambahkan</a></p>
                </div>
<div class="col-lg-14"> <div class="card-body">

 <table id="example1" class="table table-bordered table-striped">

            
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Berita</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tanggal Input</th>                        
                        <th scope="col">Isi Berita</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($berita as $a) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $a->jdl; ?></td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/info/') . $a->image; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                                </picture>
                            </td>
                            <td><?= $a->kategori; ?></td>
                            <td><?= $a->tgl_input; ?></td>
                            <td><?= substr(strip_tags($a->isi),0,70) ?>...</td>
                            <td> <a href="<?= base_url('admin/berita/ubahBerita/').$a->id_ber;?>">                    <div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div></a>
               <a href="<?= base_url('admin/berita/hapusBerita/').$a->id_ber;?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a->jdl;?> ?');">
                    <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></a>
                </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>
</div>
</div>
</div>