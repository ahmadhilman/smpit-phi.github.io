 <?php
defined('BASEPATH') or exit('No direct script access allowed');
class profile extends CI_Controller
{
     public function __construct()
     {
     parent::__construct();
        cek_login();

     }

  
     public function index()
    {
        $data['judul'] = 'Data Profile';
        $profile = $this->db->get('profile')->result_array();
        foreach ($profile as $k) {
                        $data['about'] = $k['about'];
                        $data['visi'] = $k['visi'];
                        $data['misi'] = $k['misi'];
        }
        $this->form_validation->set_rules('about', 'about', 'required|min_length[3]', [
            'required' => 'Tentang Sekolah harus diisi',
            'min_length' => 'Tentang Sekolah terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {                    
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates-admin/footer');
        } else {
                         $data = [
                'about' => $this->input->post('about', TRUE),
                'visi' => $this->input->post('visi', TRUE),
                'misi' => $this->input->post('misi', TRUE)
            ];

            $this->db->update('profile', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data ppdb Berhasil di Ubah </div>');
            redirect('admin/profile');
        }
    }

    public function pengaturan()
    {
        $data['judul'] = 'Pengaturan';
        $profile = $this->db->get('profile')->result_array();
        foreach ($profile as $k) {
                        $data['nama'] = $k['nama'];
                        $data['nama_2'] = $k['nama_2'];
                        $data['alamat'] = $k['alamat'];
                        $data['email'] = $k['email'];
                        $data['telp'] = $k['telp'];
                        $data['fb'] = $k['fb'];
                        $data['instagram'] = $k['instagram'];
                        $data['twitter'] = $k['twitter'];
                        $data['wa'] = $k['wa'];
                        $data['t_ajar'] = $k['t_ajar'];
        }
        $this->form_validation->set_rules('nama', 'nama', 'required|min_length[3]', [
            'required' => 'Nama Sekolah harus diisi',
            'min_length' => 'Nama Sekolah terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {                    
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/pengaturan', $data);
        $this->load->view('templates-admin/footer');
        } else {
                         $data = [
                'nama' => $this->input->post('nama', TRUE),
                'nama_2' => $this->input->post('nama_2', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                't_ajar' => $this->input->post('t_ajar', TRUE),
                'telp' => $this->input->post('telp', TRUE),
                'email' => $this->input->post('email', TRUE),
                'fb' => $this->input->post('fb', TRUE),
                'instagram' => $this->input->post('instagram', TRUE),
                'twitter' => $this->input->post('twitter', TRUE),
                'wa' => $this->input->post('wa', TRUE)
            ];

            $this->db->update('profile', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data ppdb Berhasil di Ubah </div>');
            redirect('admin/profile/pengaturan');
        }
    }
                
}