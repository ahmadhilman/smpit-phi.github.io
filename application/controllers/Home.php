<?php
defined('BASEPATH') or exit('No direct script access allowed');
class home extends CI_Controller
{

    public function index()
    {
    	$data['judul']  = 'Home';
        $data['berita'] = $this->ModelInfo->getBeritaLimit();
        $data['kategori'] = $this->db->get('kategori')->result();
        $profile = $this->db->get('profile')->result();
        foreach ($profile as $p) {
            $data['t_ajar'] = $p->t_ajar;
        }
    	$this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
    	$this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function daftar_guru()
    {
        $data['judul']  = 'Daftar Guru';
        $data['judul_d']  = 'Sekolah';
        $data['guru'] = $this->ModelGuru->getGuruWhere();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru', $data);
        $this->load->view('templates/footer');
    }
    public function daftar_ustadz()
    {
        $data['judul']  = 'Daftar Ustadz';
        $data['judul_d']  = 'Pesantren';
        $data['guru'] = $this->ModelGuru->getUstadzWhere();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru', $data);
        $this->load->view('templates/footer');
    }
     public function kegiatan()
    {
        $data['judul']  = 'Kegiatan Sekolah';
        $data['kegiatan'] = $this->db->get('kegiatan')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan', $data);
        $this->load->view('templates/footer');
}
 public function about()
    {
        $data['judul']  = 'Tentang Sekolah';
        $data['profile'] = $this->db->get('profile')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('about', $data);
        $this->load->view('templates/footer');
}
     public function visimisi()
    {
    	$data['judul']  = 'Profil Sekolah';
        $data['profile'] = $this->db->get('profile')->result();
    	$this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
    	$this->load->view('visimisi', $data);
        $this->load->view('templates/footer');
    }
 public function kontak()
    {
    	$data['judul']  = 'Hubungi Sekolah';
    	$this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
    	$this->load->view('home/kontak', $data);
        $this->load->view('templates/footer');
    }
    public function berita()
    {   
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->ModelInfo->total());
        $config['per_page'] = 8;
        $config['uri_segmen'] = 3;
        //start dan limit
        $limit = $config['per_page'];
        $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="text-center"><ul class="pagination_list">';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['full_tag_close'] = '</ul></div>';

        $this->pagination->initialize($config);
        $data = [
           'paginasi' =>$this->pagination->create_links()
        ];
        $data['judul']  = 'Berita Terkini';
        $data['berita'] = $this->ModelInfo->berita($limit, $start);
        $data['ber'] = $this->ModelInfo->getBeritaLimit();
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('berita', $data);
        $this->load->view('templates/footer');
    }
    public function berita_detail($id)
    {   
        $data['judul']  = 'Detail Berita';
        $data['berita'] = $this->ModelInfo->detail($id);
        $data['ber'] = $this->ModelInfo->getBeritaLimit();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('berita_detail', $data);
        $this->load->view('templates/footer');
    }
    public function ppdb()
    {   
        $data['judul']  = 'Prosedur & Biaya';
        $data['ppdb'] = $this->db->get('ppdb')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/ppdb', $data);
        $this->load->view('templates/footer');
    }
     public function pendaftaran()
    {
        $data['judul']  = 'Pendaftaran';
        $this->form_validation->set_rules('nama', 'nama siswa', 'required', [
            'required' => 'Nama Siswa harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
        $this->load->view('templates/pheader', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pendaftaran', $data);
        $this->load->view('templates/pfooter');
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
                'email' => $this->input->post('email', TRUE)
            ];
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');
            $nisn = $this->input->post('nisn');
            $config = [
                 'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'hilmanahmad089@gmail.com',
            'smtp_pass' => 'romadlan089',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
            ];
            $this->load->library('email', $config);
           
            $this->email->initialize($config);

            $this->email->from('emailfrom');
            $this->email->to($email);
            $this->email->subject('Bukti Pendaftaran SISWA/I baru TK Asy Syawaliyyah');
            $this->email->message('hai');
            
           $this->email->send();
        
               
            $this->db->insert('pendaftar', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Pendaftaran anda berhasil!<br>Silahkan Datang Ke Sekolah dengan membawa berkas-berkas persyaratan pendaftaran <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></div>');
            redirect('home/pendaftaran');
                    }
    }
    public function gallery()
    {
        $data['judul']  = 'Gallery';
        $data['gallery'] = $this->ModelGallery->getGallery();    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gallery', $data);
        $this->load->view('templates/footer');

    }
    public function detail_gallery($id)
    {
        $data['judul']  = 'Foto Gallery';
        $data['gal'] = $this->ModelGallery->getWhere($id);
        $data['gallery'] = $this->ModelGallery->gallerywhere($id);    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('detail_gallery', $data);
        $this->load->view('templates/footer');

    }

}