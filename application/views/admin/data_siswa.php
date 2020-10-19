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
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
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
                    <a href="<?= base_url('admin/siswa/tambah') ?>" class="btn btn-primary btn-sm" ><i class="material-icons"></i> Tambahkan</a></p>
                </div>
<div class="col-lg-14"> <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

            
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>                        
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">TTl</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Nama Ibu</th>
                         <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($siswa as $a) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><a class="btn btn-link" href="<?= base_url('admin/siswa/detail/' . $a['nisn']); 
?>"><?= $a['nisn']; ?></a></td>
<td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/siswa/') . $a['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                                </picture>
                            </td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['jk']; ?></td>
                            <td><?= $a['tpt_lhr']; ?>,<?= $a['tgl_lhr']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td><?= $a['ayah_nama']; ?></td>
                            <td><?= $a['ibu_nama']; ?></td>
                           
                        <td> <a href="<?= base_url('admin/siswa/ubah/').$a['nisn'];?>">                    <div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div></a>
               <a href="<?= base_url('admin/siswa/hapus/').$a['nisn'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a['nama'];?> ?');">
                    <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></a>
                </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

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
