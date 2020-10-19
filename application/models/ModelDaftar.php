<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDaftar extends CI_Model
{
public function simpan($data = null)
    {
        $this->db->insert('pendaftar', $data);
    }
public function update($data)
    {
        $this->db->where('id_daftar', $data['id_daftar']);
        $this->db->update('pendaftar', $data);
    }
    public function cek($where = null)
    {
        return $this->db->get_where('pendaftar', $where);
    }
    public function hapus($where = null)
    {
        $this->db->delete('pendaftar', $where);
    }
    public function getWhere($id_daftar)
    {
       $this->db->select('*');
       $this->db->from('pendaftar');
       $this->db->where('id_daftar', $id_daftar);
       
       return $this->db->get()->result();
    }

   public function get($where = null)
    {
        return $this->db->get_where('ppdb', $where)->result_array();
    }


     public function where($id)
    {
       $this->db->select('*');
       $this->db->from('pelajaran');
       $this->db->where('id', $id);
       
       return $this->db->get()->row();
    }

}