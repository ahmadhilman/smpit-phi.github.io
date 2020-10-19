 <?php
defined('BASEPATH') or exit('No direct script access allowed');
class pendaftaran extends CI_Controller
{
     public function __construct()
     {
     parent::__construct();
        cek_login();

     }

  public function index()
    {
        $data['judul'] = 'Data Pendaftar';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['daftar'] = $this->ModelDaftar->cek()->result_array();
        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/data_pendaftar', $data);
        $this->load->view('templates-admin/footer');
        
    }
    public function tambah()
    {
        $data['judul'] = 'Tambah Pendaftar';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $this->form_validation->set_rules('nama', 'nama Pendaftar', 'required', [
            'required' => 'Nama Pendaftar harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/tambah_daftar', $data);
        $this->load->view('templates-admin/footer');
        } else {
                         $data = [
                'nisn' => $this->input->post('nisn', TRUE),
                'nama' => $this->input->post('nama', TRUE),
                'jk' => $this->input->post('jk', TRUE),
                'id_daftar' => $this->input->post('id_daftar', TRUE),
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

            $this->ModelDaftar->simpan($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Jabatan Berhasil diTambah </div>');
            redirect('admin/pendaftaran');
        }
    }

  public function detail($id_daftar)
    {
        $data['judul'] = 'Detail Pendaftar';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $daftar = $this->ModelDaftar->getWhere($id_daftar);
        foreach ($daftar as $k) {
                        $data['id_daftar'] = $k->id_daftar;
                        $data['nama'] = $k->nama;
                        $data['nik'] = $k->nik;
                        $data['nisn'] = $k->nisn;
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
        }
        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/detail_pendaftar', $data);
        $this->load->view('templates-admin/footer');
       
    }
    public function ubahpendaftar($id_daftar)
    {        $data['judul'] = 'Ubah Data Jabatan';
        $data['daftar'] = $this->ModelDaftar->cek($id_daftar)->result_array();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        


        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates-admin/footer');
}else{
             $data = [
                'id_daftar' => $id_daftar,
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
                'email' => $this->input->post('email', TRUE)
            ];

            $this->ModelDaftar->update($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Pendaftar Berhasil diUbah </div>');
            redirect('admin/pendaftaran');
        }
    }
    public function hapusPendaftar($id_daftar)
    {
        $where = array('id_daftar'=>$id_daftar);
        $this->ModelDaftar->hapus($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Pendaftar Berhasil diHapus </div>');
        redirect('admin/pendaftaran');
    }
     public function prosedur()
    {
        $data['judul'] = 'Informasi Pendaftaran';
        $ppdb = $this->db->get('profile')->result_array();
        foreach ($ppdb as $k) {
                        $data['prosedur'] = $k['prosedur'];
        }
        $this->form_validation->set_rules('prosedur', 'prosedur', 'required|min_length[3]', [
            'required' => 'Biaya Daftar harus diisi',
            'min_length' => 'Biaya Daftar terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {                    
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/prosedur', $data);
        $this->load->view('templates-admin/footer');
        } else {
                         $data = [
                'prosedur' => $this->input->post('prosedur', TRUE)
            ];

            $this->db->update('profile', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data ppdb Berhasil di Ubah </div>');
            redirect('admin/pendaftaran/ppdb');
        }
    }
                public function terimas($id_daftar)
    {

            $k = $this->db->query("Select*from pendaftar where id_daftar='$id_daftar'")->row(); 
        
        //berupa data2 yang akan disimpan ke dalam tabel temp/keranjang 
        $gambar = 'default.jpg';
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
            'image' => $gambar,
            'password' => password_hash($k->tgl_lhr, PASSWORD_DEFAULT)
        ];
          $this->db->insert('siswa', $isi);
          $this->db->delete('pendaftar', ['id_daftar' => $id_daftar]);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Pendaftar Berhasil diTerima </div>');
            redirect('admin/pendaftaran');
          }  
}