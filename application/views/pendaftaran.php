        <section id="breadcrumbs" >
      
    </section><!-- End Breadcrumbs -->

        <div class="top-content">
            <div class="container">
                <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
                <div class="row">
                    <div class="section-title col-sm-8 col-sm-offset-2 text" style="color: black">
                        <h2>PENDAFTARAN <strong>SISWA/I</strong> BARU
                        Tahun Ajaran <?= date('yy') ?>/<?= date('Y', strtotime('+' . '1' . ' year', strtotime('Y')))  ?></h2>
                        <hr>
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                      <form  method="post" action="<?= base_url('home/pendaftaran'); ?>" role="form"  class="f1">

                        <div class="f1-steps">
                          <div class="f1-progress">
                              <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
                          </div><center>
                          <div class="f1-step active">
                            <div class="f1-step-icon"><i class="icofont-user"></i></div>
                            <p>Biodata Diri</p>
                          </div>
                          <div class="f1-step">
                            <div class="f1-step-icon"><i class="icofont-key"></i></div>
                            <p>Biodata Ayah</p>
                          </div>
                          <div class="f1-step">
                            <div class="f1-step-icon"><i class="icofont-question"></i></div>
                            <p>Biodata Ibu</p>
                          </div>
                            <div class="f1-step">
                            <div class="f1-step-icon"><i class="icofont-phone"></i></div>
                            <p>Kontak</p>
                          </div>
                        </div>
                     </center>   
                        <fieldset>
                            
                          <div class="form-group">
                              
                                    <input type="text" name="nama" placeholder="Nama Lengkap..." class="f1-first-name form-control" id="f1-first-name">
                                  
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Jenis Kelamin Siswa</label>
                                    <select class="form-first-name form-control" name="jk">
                                          <option>Pilih Jenis Kelamin</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">NISN Siswa</label>
                                    <input type="text" name="nisn"  class="form-first-name form-control" placeholder="NISN">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">NIK</label>
                                    <input type="text" name="nik"  class="form-first-name form-control" placeholder="NIK">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Tempat Lahir</label>
                                    <input type="text" name="tpt_lhr"  class="form-first-name form-control" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lhr"  class="form-first-name form-control" >
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Agama</label>
                                    <select class="form-control" name="agama">
                                  <option>Pilih Agama</option>
                                  <option>Islam</option>
                                  <option>Kristen Protestan</option>
                                  <option>Kristen Khatolik</option>
                                  <option>Hindu</option>
                                  <option>Budha</option>
                                  <option>Khong Hu Chu</option>
                                  <option>Lainnya</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Kewarganegaraan</label>
                                    <select class="form-control" name="negara">
                                          <option>Pilih kewarganegaraan</option>
                                  <option>Indonesia</option>
                                  <option>Asing</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Alamat Lengkap</label>
                                    <textarea name="alamat" placeholder="Alamat Tinggal" 
                                    class="f1-about-yourself form-control" id="f1-about-yourself"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Tempat Tinggal</label>
                                    <select class="form-control" name="tpt_tgl">
                                      <option>Pilih Tempat Tinggal</option>
                                <option>Bersama Orang Tua</option>
                                <option>Wali</option>
                                <option>Kos</option>
                                <option>Asrama</option>
                                <option>Panti Asuhan</option>
                                <option>Lainnya</option>
                              </select>
                                </div>
                                                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Nama Ayah Kandung</label>
                                    <input type="text" name="ayah_nama" placeholder="Nama Ayah Kandung" class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">NIK Ayah Kandung</label>
                                    <input type="text" name="ayah_nik" placeholder="NIK..." class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Pekerjaan Ayah Kandung</label>
                                    <select class="form-control" name="ayah_kerja">
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
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Penghasilan Bulanan</label>
                                    <select class="form-control" name="ayah_gaji">
                                <option>Kurang dari Rp 500.000</option>
                                <option>Rp 500.000 - Rp 999.999</option>
                                <option>Rp 1.000.000 - Rp 1.999.999</option>
                                <option>Rp 2.000.000 - 4.999.999</option>
                                <option>Rp 5.000.000 - Rp 20.000.000</option>
                                <option>Lebih dari Rp 20.000.000</option>
                              </select>
                                </div>
                                
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Nama Ibu Kandung</label>
                                    <input type="text" name="ibu_nama" placeholder="Nama Ibu Kandung" class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">NIK Ibu Kandung</label>
                                    <input type="text" name="ibu_nik" placeholder="NIK..." class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Pekerjaan Ibu Kandung</label>
                                    <select class="form-control" name="ibu_kerja">
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
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Penghasilan Bulanan</label>
                                    <select class="form-control" name="ibu_gaji">
                                <option>Kurang dari Rp 500.000</option>
                                <option>Rp 500.000 - Rp 999.999</option>
                                <option>Rp 1.000.000 - Rp 1.999.999</option>
                                <option>Rp 2.000.000 - 4.999.999</option>
                                <option>Rp 5.000.000 - Rp 20.000.000</option>
                                <option>Lebih dari Rp 20.000.000</option>
                              </select>
                                </div>

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                
                                <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Nama Wali</label>
                                    <input type="text" name="wali_nama" placeholder="Nama Wali..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                Cat : Jika Tidak diisi input dengan tanda ( - )<br>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-twitter">NIK Wali</label>
                                    <input type="text" name="wali_nik" placeholder="NIK Wali..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                Cat : Jika Tidak diisi input dengan tanda ( - )<br>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Pekerjaan Wali</label>
                                    <select class="form-control" name="wali_kerja">
                                    <option>-</option>
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
                                  </select>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Penghasilan Bulanan</label>
                                    <select class="form-control" name="wali_gaji">
                                    <option>-</option>
                                    <option>Kurang dari Rp 500.000</option>
                                    <option>Rp 500.000 - Rp 999.999</option>
                                    <option>Rp 1.000.000 - Rp 1.999.999</option>
                                    <option>Rp 2.000.000 - 4.999.999</option>
                                    <option>Rp 5.000.000 - Rp 20.000.000</option>
                                    <option>Lebih dari Rp 20.000.000</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Nomor Telepon Rumah</label>
                                    <input type="text" name="telp" placeholder="Nomor Telepon..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Nomor HP</label>
                                    <input type="text" name="hp" placeholder="Nomor HP..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <!--<div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" placeholder="Asal Sekolah..." class="f1-facebook form-control" id="f1-facebook">
                                </div>-->
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>
                      
                      </form>
                    </div>
                </div>
</div>
</div>
</div>