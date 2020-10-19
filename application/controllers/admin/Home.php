<?php
defined('BASEPATH') or exit('No direct script access allowed');
class home extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        cek_login();
        // cek_user();
    }
    public function index()
    {
    	$data['judul']  = 'Test';
        // $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        // $pengumuman = $this->ModelInfo->getPeng();
        //  foreach ($pengumuman as $k) {
        //                 $data['jdl'] = $k->jdl;
        // }

    	$this->load->view('templates-admin/menu', $data);
    	$this->load->view('admin/index', $data);
    }
    public function profile()
    {
        $data['judul']  = 'Profile';
        // $data['user'] = $this->ModelUser->cek(['id' => $this->session->userdata('id')])->row_array();
        $this->load->view('templates-admin/menu', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates-admin/footer');
}
}