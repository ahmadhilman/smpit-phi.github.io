<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelStaf extends CI_Model
{
public function simpan($data = null)
    {
        $this->db->insert('jabatan', $data);
    }
public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('jabatan', $data);
    }
    public function cek($where = null)
    {
        return $this->db->get_where('jabatan', $where);
    }
    public function hapus($where = null)
    {
        $this->db->delete('jabatan', $where);
    }
    public function getWhere($id)
    {
       $this->db->select('*');
       $this->db->from('jabatan');
       $this->db->where('id', $id);
       
       return $this->db->get()->row();
    }

    public function get($where = null)
    {
       $this->db->select('*');
       $this->db->from('user');
       $this->db->join('jabatan','jabatan.id = user.jabatan','left');
       
       return $this->db->get()->result_array();
    }
     public function where($id)
    {
       $this->db->select('*');
       $this->db->from('pelajaran');
       $this->db->where('id', $id);
       
       return $this->db->get()->row();
    }

}