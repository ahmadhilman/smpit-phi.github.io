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
                 <div class="card-header card-header-info">                  <p class="card-category">            <a href="<?= base_url('admin/pendaftaran/tambah') ?>" class="btn btn-primary btn-sm" ><i class="material-icons"></i> Tambahkan</a></p>
                </div>
<div class="col-lg-14"> <div class="card-body">

 <table id="example1" class="table table-bordered table-striped">

            
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Nama</th>                        
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">TTl</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Pembayaran</th>
                        <th scope="col">Aksi</th>
                         <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($daftar as $a) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><a class="btn btn-link" href="<?= base_url('admin/pendaftaran/detail/' . $a['id_daftar']); 
?>"><?= $a['nisn']; ?></a></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['jk']; ?></td>
                            <td><?= $a['tpt_lhr']; ?>,<?= $a['tgl_lhr']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td><?= $a['ayah_nama']; ?></td>
                            <td><?= $a['ibu_nama']; ?></td>
                           <td></td>
                           
<td nowrap> 
    <form action="<?= base_url('admin/pendaftaran/terimas/' . $a['id_daftar']); ?>" method="post">
<button type="submit" class="btn btn-sm btn-outline-info">
<i class="fas fa-fw fa-plus"></i></button> </form></td> 

                        <td> <a href="<?= base_url('admin/pendaftaran/ubah/').$a['id_daftar'];?>">                    <div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div></a>
               <a href="<?= base_url('admin/pendaftaran/hapusPendaftar/').$a['id_daftar'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a['nama'];?> ?');">
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
<div class="modal fade" id="guruBaruModal" tabindex="-1" role="dialog" aria-labelledby="AnggotaBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AnggotaBaruModalLabel">Tambah Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/guru'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                     <div class="form-group row"> 
                <div class="col-sm-10"> 
           <input type="radio"name="jk"value="laki-laki">laki-laki           <input type="radio"name="jk"value="perempuan">perempuan
            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
                                <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="tpt_lhr" name="tpt_lhr" placeholder="Masukkan Tempat Lahir">
                    </div>                    <div class="form-group">
                        <input type="date" class="form-control form-control-user" id="tgl_lhr" name="tgl_lhr" placeholder="Masukkan Tanggal Lahir">
                    </div>
                     <div class="form-group">
                        <select name="ajar" class="form-control form-control-user">
                            <option value="">Pilih Pengajaran</option>
                            <?php
                            foreach ($pelajaran as $k) { ?>
                                <option value="<?= $k['pelajaran'];?>"><?= $k['pelajaran'];?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="jabatan" class="form-control form-control-user">
                            <option value="">Pilih jabatan</option>
                            <?php
                            foreach ($jabatan as $j) { ?>
                                <option value="<?= $j['id'];?>"><?= $j['jabatan'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="Masukkan No Handphone">
                    </div>
                     <div class="form-group">
                        <input type="textarea" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                    </div>
                                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                                    
                         </div>
                        <label class="bmd-label-floating">Pilih Foto</label> 
                        <input type="file" class="form-control" type="text" id="image" name="image"> 
                            </div></div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons"><svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
</svg></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="material-icons"><svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
</svg></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
