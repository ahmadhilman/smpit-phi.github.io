<?php
defined('BASEPATH') or exit('No direct script access allowed');
class guru extends CI_Controller
{
     public function __construct()
     {
     parent::__construct();
        cek_login();
     }
     public function index()
    {   
        $data['judul'] = 'Data guru';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['guru'] = $this->ModelGuru->getGuru();
        $data['jabatan'] = $this->db->get('jabatan')->result_array();
        $data['pelajaran'] = $this->db->get('pelajaran')->result_array();
       
$this->form_validation->set_rules('nama', 'Nama User', 'required|min_length[3]', [
            'required' => 'Nama user harus diisi',
            'min_length' => 'Nama User terlalu pendek'
        ]);
        
$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [ 'required' => 'Nama Belum diis!!' ]); 
            $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', [ 'required' => 'Alamat Belum diis!!' ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat harus diisi'        ]);

        //konfigurasi sebelum gambar diupload
         $config['upload_path'] = './assets/img/guru/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/data_guru', $data);
        $this->load->view('templates-admin/footer');

        } else {
             if ($this->upload->do_upload('image')) {
                $foto = $this->upload->data();
                $gambar = $foto['file_name'];
            } else {
                $gambar = '';
            }
            
            $data = [
                'nama' => $this->input->post('nama', true),
                'jk' => $this->input->post('jk', true),
                'tpt_lhr' => $this->input->post('tpt_lhr', true),
                'tgl_lhr' => $this->input->post('tgl_lhr', true),
                'ajar' => $this->input->post('ajar', true),
                'jabatan' => $this->input->post('jabatan', true),
                'telp' => $this->input->post('telp', true),
                'alamat' => $this->input->post('alamat', true),
                'level' => $this->input->post('level', true),
                'image' => $gambar
            ];

            $this->ModelGuru->simpanData($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Guru Berhasil diTambah </div>');
            redirect('admin/guru');
        }
    }    

    public function ubahGuru($nip)
{ 
$data['judul'] = 'Ubah Data Guru'; 
  $data['guru'] = $this->ModelGuru->getWhere($nip);
  $data['g'] = $this->ModelGuru->get($nip);
  $data['gur'] = $this->ModelGuru->getGuru();
  $data['jabatan'] = $this->db->get('jabatan')->result_array();
  $data['pelajaran'] = $this->db->get('pelajaran')->result_array();
$data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
$this->form_validation->set_rules('nama', 'Nama User', 'required|min_length[3]', [
            'required' => 'Nama user harus diisi',
            'min_length' => 'Nama User terlalu pendek'
        ]);
        
if ($this->form_validation->run() == !true) 
{ 
$this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/ubah_guru', $data);
        $this->load->view('templates-admin/footer');
} 
else 
{ 
 
//jika ada gambar yang akan diupload8
$upload_image = $_FILES['image']['name']; 
if ($upload_image) { 
$config['upload_path'] = './assets/img/guru/'; 
$config['allowed_types'] = 'gif|jpg|png'; $config['max_size'] = '3000'; 
$config['max_width'] = ''; 
$config['max_height'] = '1000'; 
$config['file_name'] = 'pro' . time(); 
$this->load->library('upload', $config); 
$guru = $this->ModelGuru->getWhere($nip);
if ($guru->image !="") {
    unlink("assets/img/guru/".$guru->image);
}
if ($this->upload->do_upload('image')) 
    { 
        $gambar_lama = $data['user']['image']; 
        if ($gambar_lama != 'default.jpg') 
            { 
                unlink(FCPATH . 'assets/img/guru/' . $gambar_lama); 
            } 
            $gambar_baru = $this->upload->data('file_name'); 
            $this->db->set('image', $gambar_baru); 
        } 
        else 
            { 
            } 
        } 
       $data = [
        'nip' => $nip,
        'nama' => $this->input->post('nama', true),
        'jk' => $this->input->post('jk', true),
        'tgl_lhr' => $this->input->post('tgl_lhr', true),
        'tpt_lhr' => $this->input->post('tpt_lhr', true),
        'telp' => $this->input->post('telp', true),
        'alamat' => $this->input->post('alamat', true),
        'jabatan' => $this->input->post('jabatan', true),
        'ajar' => $this->input->post('ajar', true),
        'level' => $this->input->post('level', true)
       ];
       $this->ModelGuru->updateGuru($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Guru Berhasil diubah </div>'); redirect('admin/guru'); 
    } 
} 
 public function hapusGuru($nip)
    {
        
        $guru = $this->ModelGuru->getWhere($nip);
if ($guru->image !="") {
 unlink("assets/img/guru/".$guru->image);
}
   $where = array('nip'=>$nip);
        $this->ModelGuru->hapusGuru($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Guru Berhasil diHapus </div>');
        redirect('admin/guru');
    }
    }
    