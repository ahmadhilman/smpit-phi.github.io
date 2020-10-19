<?php
defined('BASEPATH') or exit('No direct script access allowed');
 date_default_timezone_set('Asia/Jakarta');
class gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    
     public function index()
    {   
        $data['judul'] = 'Data gallery';
        // $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['gallery'] = $this->ModelGallery->getgalleryWhere();
        // $data['kategori'] = $this->db->get('kategori')->result_array();
	    $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/data_gallery' );
        $this->load->view('templates-admin/footer');


    }

    public function isifoto($id)
    {   
        $data['judul'] = 'gallery';
        // $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['gallery'] = $this->ModelGallery->getWhere($id);
        $data['gal'] = $this->ModelGallery->galleryWhere($id);
        $data['kategori'] = $this->db->get('kategori')->result_array();
	    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
            'required' => 'Foto harus diisi'
        ]);
        
        //konfigurasi sebelum gambar diupload
         $config['upload_path'] = './assets/img/gallery/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';
        $config['max_width'] = '1824';
        $config['max_height'] = '1800';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/gallery' );
        $this->load->view('templates-admin/footer');


        } else {
             if ($this->upload->do_upload('image')) {
                $foto = $this->upload->data();
                $gambar = $foto['file_name'];
            } else {
                $gambar = '';
            }
            
            $data = [
                'id_gallery' => $id,
                'keterangan' => $this->input->post('keterangan', true),     
                'foto' => $gambar
            ];

            $this->db->insert('detail_gallery', $data);
             $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">gallery Berhasil diTambah </div>');
            redirect('admin/gallery/isifoto/'.$id);
        }


    }

    public function tambah()   
    {
        $data['judul'] = 'Tambah gallery';
        // $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['gallery'] = $this->ModelGallery->getgalleryWhere();
        $data['kategori'] = $this->db->get('kategori')->result_array();
$this->form_validation->set_rules('jdl', 'Nama User', 'required|min_length[3]', [
            'required' => 'Judul harus diisi',
            'min_length' => 'judul terlalu pendek'
        ]);
        
        //konfigurasi sebelum gambar diupload
         $config['upload_path'] = './assets/img/gallery/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';
        $config['max_width'] = '1824';
        $config['max_height'] = '1800';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);;
        $this->load->view('admin/tambah_gallery' );
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
                'image' => $gambar
            ];

            $this->ModelGallery->simpangallery($data);
             $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">gallery Berhasil diTambah </div>');
            redirect('admin/gallery');
        }
    }
    public function ubahgallery($id)
{ 
        $data['judul'] = 'Ubah gallery';
        // $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['gallery'] = $this->ModelGallery->getWhere($id);
        $data['ber'] = $this->ModelGallery->getgalleryWhere();
        $data['kategori'] = $this->db->get('kategori')->result_array();
$this->form_validation->set_rules('jdl', 'Judul gallery', 'required|min_length[3]', [
            'required' => 'Judul gallery harus diisi',
            'min_length' => 'Judul gallery terlalu pendek'
        ]);
        
if ($this->form_validation->run() == !true) 
{ 
        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/ubah_gallery' );
        $this->load->view('templates-admin/footer');
} 
else 
{ 
 
//jika ada gambar yang akan diupload8
$upload_image = $_FILES['image']['name']; 
if ($upload_image) { $config['upload_path'] = './assets/img/gallery/'; 
$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
$config['max_size'] = '0'; 
$config['max_width'] = '1824'; 
$config['max_height'] = '1800'; 
$config['file_name'] = 'pro' . time(); 
$this->load->library('upload', $config); 
$gallery = $this->ModelGallery->getWhere($id);
if ($gallery->image !="") {
    unlink("assets/img/gallery/".$gallery->image);
}
if ($this->upload->do_upload('image')) 
    { 
        $gambar_lama = $data['user']['image']; 
        if ($gambar_lama != 'default.jpg') 
            { 
                unlink(FCPATH . 'assets/img/gallery/' . $gambar_lama); 
            } 
            $gambar_baru = $this->upload->data('file_name'); 
            $this->db->set('image', $gambar_baru); 
        } 
        else 
            { 
            } 
        } 
       $data = [
        'id' => $id,
        'jdl' => $this->input->post('jdl', true)
        
       ];
       $this->ModelGallery->updategallery($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">gallery Berhasil diubah </div>'); redirect('admin/gallery'); 
    } 
} 
public function hapusgallery($id)
    {
        
        $gallery = $this->ModelGallery->getWhere($id);
if ($gallery->image !="") {
    unlink("assets/img/gallery/".$gallery->image);
}
   $where = array('id'=>$id);
        $this->ModelGallery->hapusgallery($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data gallery Berhasil diHapus </div>');
        redirect('admin/gallery');
    }
    public function hapusFoto($id)
    {
        
        $detailgallery = $this->ModelGallery->detailWhere($id);
if ($detailgallery->foto !="") {
    unlink("assets/img/gallery/".$detailgallery->foto);
}
   $where = array('id'=>$id);
        $this->db->delete('detail_gallery', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Foto Berhasil diHapus </div>');
        redirect('admin/gallery/');
    }
    }
