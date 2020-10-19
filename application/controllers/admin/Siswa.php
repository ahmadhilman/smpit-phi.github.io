 <?php
defined('BASEPATH') or exit('No direct script access allowed');
class siswa extends CI_Controller
{
     public function __construct()
     {
     parent::__construct();
        cek_login();

     }

  public function index()
    {
        $data['judul'] = 'Data Siswa';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['siswa'] = $this->ModelSiswa->getSiswa()->result_array();
        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/data_siswa', $data);
        $this->load->view('templates-admin/footer');
        
    }
    public function tambah()
    {
        $data['judul'] = 'Tambah Siswa';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['daftar'] = $this->ModelSiswa->cek()->result_array();

        $this->form_validation->set_rules('nama', 'nama Pendaftar', 'required', [
            'required' => 'Nama Pendaftar harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/tambah_siswa', $data);
        $this->load->view('templates-admin/footer');
        } else {
                         $data = [
                'nama' => $this->input->post('nama', TRUE),
                'jk' => $this->input->post('jk', TRUE),
                'nisn' => $this->input->post('nisn', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'tpt_lhr' => $this->input->post('tpt_lhr', TRUE),
                'tgl_lhr' => $this->input->post('tgl_lhr', TRUE),
                'agama' => $this->input->post('agama', TRUE),
                'negara' => $this->input->post('negara', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'tpt_tgl' => $this->input->post('tpt_tgl', TRUE),
                'ayah_nama' => $this->input->post('ayah_nama', TRUE),
                'ayah_nik' => $this->input->post('ayah_nik', TRUE),
                'ayah_kerja' => $this->input->post('ayah_kerja', TRUE),
                'ayah_gaji' => $this->input->post('ayah_gaji', TRUE),
                'ibu_nama' => $this->input->post('ibu_nama', TRUE),
                'ibu_nik' => $this->input->post('ibu_nik', TRUE),
                'ibu_kerja' => $this->input->post('ibu_kerja', TRUE),
                'ibu_gaji' => $this->input->post('ibu_gaji', TRUE),
                'wali_nama' => $this->input->post('wali_nama', TRUE),
                'wali_nik' => $this->input->post('wali_nik', TRUE),
                'wali_kerja' => $this->input->post('wali_kerja', TRUE),
                'wali_gaji' => $this->input->post('wali_gaji', TRUE),
                'telp' => $this->input->post('telp', TRUE),
                'hp' => $this->input->post('hp', TRUE),
                'email' => $this->input->post('email', TRUE),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('tgl_lhr', TRUE), PASSWORD_DEFAULT)
            ];

            $this->ModelSiswa->simpan($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Siswa Berhasil diTambah </div>');
            redirect('admin/siswa');
        }
    }

  public function detail($nisn)
    {
        $data['judul'] = 'Detail Pendaftar';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $daftar = $this->ModelSiswa->getWhere($nisn);
        foreach ($daftar as $k) {
                        $data['nisn'] = $k->nisn;
                        $data['nama'] = $k->nama;
                        $data['nik'] = $k->nik;
                        $data['jk'] = $k->jk;
                        $data['agama'] = $k->agama;
                        $data['tpt_lhr'] = $k->tpt_lhr;
                        $data['tgl_lhr'] = $k->tgl_lhr;
                        $data['negara'] = $k->negara;
                        $data['alamat'] = $k->alamat;
                        $data['tpt_tgl'] = $k->tpt_tgl;
                        $data['ayah_nama'] = $k->ayah_nama;
                        $data['ayah_nik'] = $k->ayah_nik;
                        $data['ayah_kerja'] = $k->ayah_kerja;
                        $data['ayah_gaji'] = $k->ayah_gaji;
                        $data['ibu_nama'] = $k->ibu_nama;
                        $data['ibu_nik'] = $k->ibu_nik;
                        $data['ibu_kerja'] = $k->ibu_kerja;
                        $data['ibu_gaji'] = $k->ibu_gaji;
                        $data['wali_nama'] = $k->wali_nama;
                        $data['wali_nik'] = $k->wali_nik;
                        $data['wali_kerja'] = $k->wali_kerja;
                        $data['wali_gaji'] = $k->wali_gaji;
                        $data['telp'] = $k->telp;
                        $data['hp'] = $k->hp;
                        $data['email'] = $k->email;
                        $data['image'] = $k->image;
        }
        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/detail_siswa', $data);
        $this->load->view('templates-admin/footer');
       
    }
    public function ubah($nisn)
    {        $data['judul'] = 'Ubah Data Siswa';
        $daftar = $this->ModelSiswa->getWhere($nisn);
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        foreach ($daftar as $k) {
                        $data['nisn'] = $k->nisn;
                        $data['nama'] = $k->nama;
                        $data['nik'] = $k->nik;
                        $data['jk'] = $k->jk;
                        $data['agama'] = $k->agama;
                        $data['tpt_lhr'] = $k->tpt_lhr;
                        $data['tgl_lhr'] = $k->tgl_lhr;
                        $data['negara'] = $k->negara;
                        $data['alamat'] = $k->alamat;
                        $data['tpt_tgl'] = $k->tpt_tgl;
                        $data['ayah_nama'] = $k->ayah_nama;
                        $data['ayah_nik'] = $k->ayah_nik;
                        $data['ayah_kerja'] = $k->ayah_kerja;
                        $data['ayah_gaji'] = $k->ayah_gaji;
                        $data['ibu_nama'] = $k->ibu_nama;
                        $data['ibu_nik'] = $k->ibu_nik;
                        $data['ibu_kerja'] = $k->ibu_kerja;
                        $data['ibu_gaji'] = $k->ibu_gaji;
                        $data['wali_nama'] = $k->wali_nama;
                        $data['wali_nik'] = $k->wali_nik;
                        $data['wali_kerja'] = $k->wali_kerja;
                        $data['wali_gaji'] = $k->wali_gaji;
                        $data['telp'] = $k->telp;
                        $data['hp'] = $k->hp;
                        $data['email'] = $k->email;
                        $data['image'] = $k->image;
        }


        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/detail_siswa', $data);
        $this->load->view('templates-admin/footer');
}else{
    //jika ada gambar yang akan diupload8
$upload_image = $_FILES['image']['name']; 
if ($upload_image) { 
    $config['upload_path'] = './assets/img/siswa/'; 
    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
    $config['max_size'] = '0'; 
    $config['max_width'] = '1024'; 
    $config['max_height'] = '1000'; 
    $this->load->library('upload', $config); 
    $siswa = $this->ModelSiswa->getWhere($nip);
    if ($siswa->image !="") {
        unlink("assets/img/siswa/".$siswa->image);
    }
    if ($this->upload->do_upload('image')) 
    { 
        $gambar_lama = $data['user']['image']; 
        if ($gambar_lama != 'default.jpg') 
            { 
                unlink(FCPATH . 'assets/img/siswa/' . $gambar_lama); 
            } 
            $gambar_baru = $this->upload->data('file_name'); 
            $this->db->set('image', $gambar_baru); 
        } 
        else 
            { 
            } 
        }
             $where = ['nisn' => $nisn];
             $data = [
                'nama' => $this->input->post('nama', TRUE),
                'jk' => $this->input->post('jk', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'tpt_lhr' => $this->input->post('tpt_lhr', TRUE),
                'tgl_lhr' => $this->input->post('tgl_lhr', TRUE),
                'agama' => $this->input->post('agama', TRUE),
                'negara' => $this->input->post('negara', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'tpt_tgl' => $this->input->post('tpt_tgl', TRUE),
                'ayah_nama' => $this->input->post('ayah_nama', TRUE),
                'ayah_nik' => $this->input->post('ayah_nik', TRUE),
                'ayah_kerja' => $this->input->post('ayah_kerja', TRUE),
                'ayah_gaji' => $this->input->post('ayah_gaji', TRUE),
                'ibu_nama' => $this->input->post('ibu_nama', TRUE),
                'ibu_nik' => $this->input->post('ibu_nik', TRUE),
                'ibu_kerja' => $this->input->post('ibu_kerja', TRUE),
                'ibu_gaji' => $this->input->post('ibu_gaji', TRUE),
                'wali_nama' => $this->input->post('wali_nama', TRUE),
                'wali_nik' => $this->input->post('wali_nik', TRUE),
                'wali_kerja' => $this->input->post('wali_kerja', TRUE),
                'wali_gaji' => $this->input->post('wali_gaji', TRUE),
                'telp' => $this->input->post('telp', TRUE),
                'hp' => $this->input->post('hp', TRUE),
                'email' => $this->input->post('email', TRUE)
            ];

            $this->ModelSiswa->update($data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Pendaftar Berhasil diUbah </div>');
            redirect('admin/siswa');
        }
    }

    public function hapus($nisn)
    {
        $where = array('nisn'=>$nisn);
        $this->ModelSiswa->hapus($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Siswa Berhasil diHapus </div>');
        redirect('admin/siswa');
    }
     public function ppdb()
    {
        $data['judul'] = 'Prosedur dan Biaya';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $ppdb = $this->ModelSiswa->get();
        $this->load->helper('rupiah_helper');
        foreach ($ppdb as $k) {
                        $data['b_daftar'] = $k['b_daftar'];
                        $data['b_spp'] = $k['b_spp'];
                        $data['b_seragam'] = $k['b_seragam'];
                        $data['b_bangunan'] = $k['b_bangunan'];
                        $data['prosedur'] = $k['prosedur'];
        }
        $this->form_validation->set_rules('b_daftar', 'Biaya daftar', 'required|min_length[3]', [
            'required' => 'Biaya Daftar harus diisi',
            'min_length' => 'Biaya Daftar terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {                    
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/ppdb', $data);
        $this->load->view('templates-admin/footer');
        } else {
                         $data = [
                'id' => $this->input->post('id', TRUE),
                'b_daftar' => $this->input->post('b_daftar', TRUE),
                'b_spp' => $this->input->post('b_spp', TRUE),
                'b_seragam' => $this->input->post('b_seragam', TRUE),
                'b_bangunan' => $this->input->post('b_bangunan', TRUE),
                'prosedur' => $this->input->post('prosedur', TRUE)
            ];

            $this->db->update('ppdb', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data ppdb Berhasil di Ubah </div>');
            redirect('admin/siswa/ppdb');
        }
    }
                public function terimas($nisn)
    {

            $k = $this->db->query("Select*from pendaftar where nisn='$nisn'")->row(); 
        
        //berupa data2 yang akan disimpan ke dalam tabel temp/keranjang 
        
        $isi = [ 
            'nisn' => $k->nisn, 
            'nik' => $k->nik, 
            'nama' => $k->nama,
            'jk' => $k->jk,
            'agama' => $k->agama,
            'tpt_lhr' => $k->tpt_lhr,
            'tgl_lhr' => $k->tgl_lhr,
            'negara' => $k->negara,
            'alamat' => $k->alamat,
            'tpt_tgl' => $k->tpt_tgl,
            'ayah_nama' => $k->ayah_nama,
            'ayah_nik' => $k->ayah_nik,
            'ayah_kerja' => $k->ayah_kerja,
            'ayah_gaji' => $k->ayah_gaji,
            'ibu_nama' => $k->ibu_nama,
            'ibu_nik' => $k->ibu_nik,
            'ibu_kerja' => $k->ibu_kerja,
            'ibu_gaji' => $k->ibu_gaji,
            'wali_nama' => $k->wali_nama,
            'wali_nik' => $k->wali_nik,
            'wali_kerja' => $k->wali_kerja,
            'wali_gaji' => $k->wali_gaji,
            'telp' => $k->telp,
            'hp' => $k->hp,
            'email' => $k->email,
            'password' => password_hash($k->tgl_lhr, PASSWORD_DEFAULT)
        ];
          $this->db->insert('siswa', $isi);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Pendaftar Berhasil diTerima </div>');
            redirect('admin/siswa');
          }  
}