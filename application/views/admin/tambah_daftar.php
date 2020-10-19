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
          <?= form_open_multipart('admin/pendaftaran/tambah'); ?>
          <div class="row">
            <div class="col-lg-12">
    <div class="col-lg-12 col-md-15">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Data Pendaftar</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <tr><td>Nama</td><td> <input type="text" class="form-control" name="nama" id="nama" ></td></tr>
                      <tr><td>NISN</td><td> <input type="text" class="form-control" name="nisn" id="nisn" ></td></tr>
                      <tr><td>NIK</td><td> <input type="text" class="form-control" name="nik" id="nik" ></td></tr>
                      <tr><td>Jenis Kelamin</td><td><select class="form-first-name form-control" name="jk">
                                          <option>-pilih jenis kelamin-</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                  </select></td></tr>
                      <tr><td>Agama</td><td> <select class="form-control" name="agama">
                                  <option>-pilih agama-</option>
                                  <option>Islam</option>
                                  <option>Kristen Protestan</option>
                                  <option>Kristen Khatolik</option>
                                  <option>Hindu</option>
                                  <option>Budha</option>
                                  <option>Khong Hu Chu</option>
                                  <option>Lainnya</option>
                                </select></td></tr>
                      <tr><td>TTl</td><td><input type="text" name="tpt_lhr"  class="form-first-name form-control" > <input type="date" name="tgl_lhr"  class="form-first-name form-control"></td></tr>
                      <tr><td>Negara</td><td><select class="form-control" name="negara">
                                          <option>-pilih negara-</option>
                                  <option>Indonesia</option>
                                  <option>Asing</option>
                                </select></td></tr>
                      <tr><td>Alamat</td><td><textarea name="alamat"  
                                    class="f1-about-yourself form-control" id="f1-about-yourself"></textarea></td></tr>
                      <tr><td>Tempat tinggal</td><td>                                    
                        <select class="form-control" name="tpt_tgl">
                        <option>-pilih tempat tinggal-</option>
                                <option>Bersama Orang Tua</option>
                                <option>Wali</option>
                                <option>Kos</option>
                                <option>Asrama</option>
                                <option>Panti Asuhan</option>
                                <option>Lainnya</option>
                              </select></td></tr>
                    
                  </table> 
                  </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-15">
              <div class="card">
            <div class="card-header card-header-warning">
                  <h4 class="card-title">Data Ayah</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover ">
                      <tr><td>Nama Ayah</td><td> <input type="text" name="ayah_nama" class="f1-email form-control" id="f1-email"></td></tr>
                      <tr><td>NIK Ayah</td><td><input type="text" name="ayah_nik" class="f1-password form-control" id="f1-password"></td></tr>
                      <tr><td>Pekerjaan Ayah</td><td><select class="form-control" name="ayah_kerja">
                                    <option>-pilih pekerjaan-</option>
                                    <option>Tidak Bekerja</option>
                                    <option>Nelayan</option>
                                    <option>Petani</option>
                                    <option>Peternak</option>
                                    <option>PNS/TNI/POLRI</option>
                                    <option>Karyawan Swasta</option>
                                    <option>Pedagang Kecil</option>
                                    <option>Pedagang Besar</option>
                                    <option>Wiraswasta</option>
                                    <option>Wirausaha</option>
                                    <option>Buruh</option>
                                    <option>Pensiunan</option>
                                    <option>Lain-Lain</option>
                                  </select></td></tr>
                      <tr><td>Gaji Ayah</td><td><select class="form-control" name="ayah_gaji">
                        <option>-pilih gaji-</option>
                                <option>Kurang dari Rp 500.000</option>
                                <option>Rp 500.000 - Rp 999.999</option>
                                <option>Rp 1.000.000 - Rp 1.999.999</option>
                                <option>Rp 2.000.000 - 4.999.999</option>
                                <option>Rp 5.000.000 - Rp 20.000.000</option>
                                <option>Lebih dari Rp 20.000.000</option>
                              </select></td></tr>
                  </table> 
                </div>
              </div>
            </div>
          <div class="col-lg-12 col-md-15">
              <div class="card">
            <div class="card-header card-header-warning">
                  <h4 class="card-title">Data Ibu</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover ">
                      <tr><td>Nama Ibu </td><td> <input type="text" name="ibu_nama" class="f1-email form-control" id="f1-email" ></td></tr>
                      <tr><td>NIK Ibu </td><td><input type="text" name="ibu_nik" class="f1-password form-control" id="f1-password"></td></tr>
                      <tr><td>Pekerjaan Ibu </td><td><select class="form-control" name="ibu_kerja">
                                    <option>-pilih pekerjaan-</option>
                                    <option>Tidak Bekerja</option>
                                    <option>Nelayan</option>
                                    <option>Petani</option>
                                    <option>Peternak</option>
                                    <option>PNS/TNI/POLRI</option>
                                    <option>Karyawan Swasta</option>
                                    <option>Pedagang Kecil</option>
                                    <option>Pedagang Besar</option>
                                    <option>Wiraswasta</option>
                                    <option>Wirausaha</option>
                                    <option>Buruh</option>
                                    <option>Pensiunan</option>
                                    <option>Lain-Lain</option>
                                  </select></td></tr>
                      <tr><td>Gaji Ibu</td><td><select class="form-control" name="ibu_gaji">
                        <option>-pilih gaji-</option>
                                <option>Kurang dari Rp 500.000</option>
                                <option>Rp 500.000 - Rp 999.999</option>
                                <option>Rp 1.000.000 - Rp 1.999.999</option>
                                <option>Rp 2.000.000 - 4.999.999</option>
                                <option>Rp 5.000.000 - Rp 20.000.000</option>
                                <option>Lebih dari Rp 20.000.000</option>
                              </select></td></tr>
                  </table> 
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-15">
              <div class="card">
            <div class="card-header card-header-warning">
                  <h4 class="card-title">Data Wali</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover ">
                      <tr><td>Nama Wali </td><td><input type="text" name="wali_nama" class="f1-email form-control" id="f1-email" ></td></tr>
                      <tr><td>NIK Wali </td><td><input type="text" name="wali_nik" class="f1-password form-control" id="f1-password"></td></tr>
                      <tr><td>Pekerjaan Wali </td><td><select class="form-control" name="wali_kerja">
                                    <option>-pilih pekerjaan-</option>
                                    <option>Tidak Bekerja</option>
                                    <option>Nelayan</option>
                                    <option>Petani</option>
                                    <option>Peternak</option>
                                    <option>PNS/TNI/POLRI</option>
                                    <option>Karyawan Swasta</option>
                                    <option>Pedagang Kecil</option>
                                    <option>Pedagang Besar</option>
                                    <option>Wiraswasta</option>
                                    <option>Wirausaha</option>
                                    <option>Buruh</option>
                                    <option>Pensiunan</option>
                                    <option>Lain-Lain</option>
                                  </select></td></tr>
                      <tr><td>Gaji Wali</td><td><select class="form-control" name="wali_gaji">
                        <option>-pilih gaji-</option>
                                <option>Kurang dari Rp 500.000</option>
                                <option>Rp 500.000 - Rp 999.999</option>
                                <option>Rp 1.000.000 - Rp 1.999.999</option>
                                <option>Rp 2.000.000 - 4.999.999</option>
                                <option>Rp 5.000.000 - Rp 20.000.000</option>
                                <option>Lebih dari Rp 20.000.000</option>
                              </select></td></tr>
                      <tr><td>No Telepon </td><td><input type="text" name="telp" class="f1-facebook form-control" id="f1-facebook"></td></tr>
                      <tr><td>No Handphone </td><td><input type="text" name="hp" class="f1-facebook form-control" id="f1-facebook"></td></tr>
                      <tr><td>Email</td><td><input type="text" name="email" value="@gmail.com" class="f1-facebook form-control" id="f1-facebook"></td></tr>
                  </table> 
                  
                </div>
              </div>
              <div class="col-lg-12 col-md-15">
              <div class="card">
              <div class="card-header card-header-info">
                  <center>
                  <button type="button" class="btn btn-warning"  data-dismiss="modal"><i class="material-icons">reply</i><a href="<?php echo base_url('admin/pendaftaran'); ?>"> Kembali</a></button>
                    <button type="submit" class="btn btn-primary"><i class="material-icons"></i> tambah</button>
</center>
</div>
</div>
                </div>
            </div>
          </div>

</div>
</div>
</div>