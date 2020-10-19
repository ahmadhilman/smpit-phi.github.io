<?php
defined('BASEPATH') or exit('No direct script access allowed');
class mapel extends CI_Controller
{
     public function __construct()
     {
     parent::__construct();
        cek_login();

     }
     public function index()
    {
        $data['judul'] = 'Mata Pelajaran';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['mapel'] = $this->db->get('pelajaran')->result_array();
        $this->form_validation->set_rules('pelajaran', 'nama pelajaran', 'required', [
            'required' => 'Nama Pelajaran harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/data_mapel', $data);
        $this->load->view('templates-admin/footer');
         } else {
            $data = [
                'pelajaran' => $this->input->post('pelajaran', TRUE)
            ];

            $this->db->insert('pelajaran', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Mata Pelajaran Berhasil diTambah </div>');
            redirect('admin/mapel');
        }

    }
    public function ubahmapel($id)
    {        $data['judul'] = 'Ubah Data Mapel';
        $data['mapel'] = $this->ModelStaf->where($id);
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        


        $this->form_validation->set_rules('pelajaran', 'Nama Pelajaran', 'required|min_length[3]', [
            'required' => 'Nama Pelajaran harus diisi',
            'min_length' => 'Nama Pelajaran terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/ubah_mapel', $data);
        $this->load->view('templates-admin/footer');
}else{
            $data = [
                'id' => $id,
                'pelajaran' => $this->input->post('pelajaran', true)
            ];
            $this->db->where('id', $data['id']);
            $this->db->update('pelajaran', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Mata Pelajaran Berhasil diUbah </div>');
            redirect('admin/mapel');
        }
    }

    public function hapusMapel($id)
    {
        $where = array('id'=>$id);
        $this->db->delete('pelajaran', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Mata Pelajaran Berhasil diHapus </div>');
        redirect('admin/mapel');
    }

    public function set_mapel()
    {
    	     $data['judul'] = 'Mata Pelajaran';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['setmapel'] = $this->db->get('set_mapel')->result_array();
        $data['guru'] = $this->db->get('guru')->result_array();
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $data['mapel'] = $this->db->get('pelajaran')->result_array();
        

        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/set_mapel', $data);
        $this->load->view('templates-admin/footer');
       
     
        
    }
    public function simpan()
    {
    $p = $this->input->post();
    $k = ['kelas' => $this->input->post()];
        $teks_val = array();
        foreach ($k['kelas'] as $s) {
            $teks_val[] = "('".$p['guru']."', '".$s."', '".$p['mapel']."')";
        }

        $query = "INSERT IGNORE INTO set_mapel (guru, kelas, mapel) VALUES ".implode(", ", $teks_val).";";
        
        $this->db->query($query);
               redirect('admin/mapel/set_mapel');
    }

    public function hapusSet($id)
    {
        $where = array('id'=>$id);
        $this->db->delete('set_mapel', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Set Mata Pelajaran Berhasil diHapus </div>');
        redirect('admin/mapel/set_mapel');
    }
}