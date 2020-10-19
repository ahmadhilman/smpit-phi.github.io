<?php
defined('BASEPATH') or exit('No direct script access allowed');
 date_default_timezone_set('Asia/Jakarta');
class berita extends CI_Controller
{
     public function __construct()
     {
     parent::__construct();
        cek_login();

     }
     public function index()
    {   
        $data['judul'] = 'Data Berita';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['berita'] = $this->ModelInfo->getBeritaWhere();
        $data['kategori'] = $this->db->get('kategori')->result_array();
       $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/data_Berita', $data);
        $this->load->view('templates-admin/footer');


    } 
    public function tambah()   
    {
        $data['judul'] = 'Tambah Berita';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['berita'] = $this->ModelInfo->getBeritaWhere();
        $data['kategori'] = $this->db->get('kategori')->result_array();
$this->form_validation->set_rules('jdl', 'Nama User', 'required|min_length[3]', [
            'required' => 'Judul harus diisi',
            'min_length' => 'judul terlalu pendek'
        ]);
        
        //konfigurasi sebelum gambar diupload
         $config['upload_path'] = './assets/img/info/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/tambah_Berita', $data);
        $this->load->view('templates-admin/footer');

        } else {
             if ($this->upload->do_upload('image')) {
                $foto = $this->upload->data();
                $gambar = $foto['file_name'];
            } else {
                $gambar = '';
            }
            
            $data = [
                'jdl' => $this->input->post('jdl', true),
                'kategori' => $this->input->post('kategori', true),
                'isi' => $this->input->post('isi', true),
                'tgl_input' => date('Y-m-d H:i:s'),
                'id_user' => $this->session->userdata('id'),            
                'image' => $gambar
            ];

            $this->ModelInfo->simpanBerita($data);
             $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Berita Berhasil diTambah </div>');
            redirect('admin/berita');
        }
    }
    public function ubahBerita($id_ber)
{ 
 $data['judul'] = 'Ubah Berita';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['berita'] = $this->ModelInfo->getWhere($id_ber);
        $data['ber'] = $this->ModelInfo->getBeritaWhere();
        $data['kat'] = $this->ModelInfo->get($id_ber);
        $data['kategori'] = $this->db->get('kategori')->result_array();

$data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
$this->form_validation->set_rules('jdl', 'Judul Berita', 'required|min_length[3]', [
            'required' => 'Judul Berita harus diisi',
            'min_length' => 'Judul Berita terlalu pendek'
        ]);
        
if ($this->form_validation->run() == !true) 
{ 
$this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/ubah_berita', $data);
        $this->load->view('templates-admin/footer');
} 
else 
{ 
 
//jika ada gambar yang akan diupload8
$upload_image = $_FILES['image']['name']; 
if ($upload_image) { $config['upload_path'] = './assets/img/info/'; 
$config['allowed_types'] = 'gif|jpg|png'; 
$config['max_size'] = '0';  
$config['file_name'] = 'pro' . time(); 
$this->load->library('upload', $config); 
if ($berita->image !="") {
    unlink("assets/img/info/".$berita->image);
}
if ($this->upload->do_upload('image')) 
    { 
        $gambar_lama = $data['user']['image']; 
        if ($gambar_lama != 'default.jpg') 
            { 
                unlink(FCPATH . 'assets/img/info/' . $gambar_lama); 
            } 
            $gambar_baru = $this->upload->data('file_name'); 
            $this->db->set('image', $gambar_baru); 
        } 
        else 
            { 
            } 
        } 
       $data = [
        'id_ber' => $id_ber,
        'jdl' => $this->input->post('jdl', true),
        'kategori' => $this->input->post('kategori', true),
        'isi' => $this->input->post('isi', true),
        'id_user' => $this->session->userdata('id'), 
        'tgl_input' => date('Y-m-d H:i:s')
        
       ];
       $this->ModelInfo->updateBerita($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Berita Berhasil diubah </div>'); redirect('admin/berita'); 
    } 
} 
public function hapusBerita($id_ber)
    {
        
        $berita = $this->ModelInfo->getWhere($id_ber);
if ($berita->image !="") {
 unlink("assets/img/info/".$berita->image);
}
   $where = array('id'=>$id);
        $this->ModelInfo->hapusBerita($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Berita Berhasil diHapus </div>');
        redirect('admin/berita');
    }
    public function pengumuman()   
    {
        $data['judul'] = 'pengumuman';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['pengumuman'] = $this->ModelInfo->getPeng();
        $this->form_validation->set_rules('jdl', 'Nama User', 'required|min_length[3]', [
            'required' => 'Judul harus diisi',
            'min_length' => 'judul terlalu pendek'
        ]);
        
      if ($this->form_validation->run() == false) {
        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/data_pengumuman', $data);
        $this->load->view('templates-admin/footer');
    }else{
            
            $data = [
                'jdl' => $this->input->post('jdl', true),
                'isi' => $this->input->post('isi', true),
                'tgl_input' => date('Y-m-d H:i:s'),      
                
            ];

            $this->ModelInfo->simpan($data);
             $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Pengumuman Berhasil diTambah </div>');
            redirect('admin/info/pengumuman');
        }
    }
    
    public function ubahPengumuman($id)
{ 
 $data['judul'] = 'Ubah Pengumuman';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['pengumuman'] = $this->ModelInfo->Where($id);
    

$data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
$this->form_validation->set_rules('jdl', 'Judul Berita', 'required|min_length[3]', [
            'required' => 'Judul Pengumuman harus diisi',
            'min_length' => 'Judul Pengumuman terlalu pendek'
        ]);
        
if ($this->form_validation->run() == !true) 
{ 
$this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/ubah_peng', $data);
        $this->load->view('templates-admin/footer');
} 
else 
{ 
 
//jika ada gambar yang akan diupload8
       $data = [
        'id' => $id,
        'jdl' => $this->input->post('jdl', true),
        'isi' => $this->input->post('isi', true),
        'tgl_input' => date('Y-m-d H:i:s')
        
       ];
       $this->ModelInfo->update($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Pengumuman Berhasil diubah </div>'); redirect('admin/info/pengumuman'); 
    } 
} 
public function hapusPengumuman($id)
    {
        
        $pengumuman = $this->ModelInfo->Where($id);
   $where = array('id'=>$id);
        $this->ModelInfo->hapus($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Pengumuman Berhasil diHapus </div>');
        redirect('admin/info');
    }
    }
    