  <?php
defined('BASEPATH') or exit('No direct script access allowed');
class jabatan extends CI_Controller
{
     public function __construct()
     {
     parent::__construct();
        cek_login();

     }

  public function index()
    {
        $data['judul'] = 'Data Jabatan';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['jabatan'] = $this->ModelStaf->cek()->result_array();


        $this->form_validation->set_rules('jabatan', 'nama Jabatan', 'required', [
            'required' => 'Judul Buku harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/data_jabatan', $data);
        $this->load->view('templates-admin/footer');
        } else {
            $data = [
                'jabatan' => $this->input->post('jabatan', TRUE)
            ];

            $this->ModelStaf->simpan($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Jabatan Berhasil diTambah </div>');
            redirect('admin/jabatan');
        }
    }

    public function ubahJabatan($id)
    {        $data['judul'] = 'Ubah Data Jabatan';
        $data['jabatan'] = $this->ModelStaf->getWhere($id);
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        


        $this->form_validation->set_rules('jabatan', 'Nama Jabatan', 'required|min_length[3]', [
            'required' => 'Nama Jabatan harus diisi',
            'min_length' => 'Nama Jabatan terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/ubah_jabatan', $data);
        $this->load->view('templates-admin/footer');
}else{
            $data = [
                'id' => $id,
                'jabatan' => $this->input->post('jabatan', true)
            ];

            $this->ModelStaf->update($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Jabatan Berhasil diUbah </div>');
            redirect('admin/jabatan');
        }
    }

    public function hapusJabatan($id)
    {
        $where = array('id'=>$id);
        $this->ModelStaf->hapus($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Jabatan Berhasil diHapus </div>');
        redirect('admin/jabatan');
    }
}