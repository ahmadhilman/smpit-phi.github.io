<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMapel extends CI_Model
{
public function simpan($data = null)
    {
        $this->db->insert('set_mapel', $data);
    }
public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('set_mapel', $data);
    }
    public function cek($where = null)
    {
        return $this->db->get_where('set_mapel', $where);
    }
    public function hapus($where = null)
    {
        $this->db->delete('set_mapel', $where);
    }
    public function getWhere($value)
    {
       $this->db->select('*');
       $this->db->from('set_mapel');
       $this->db->where($value);
       
       return $this->db->get();
    }

    public function get($where = null)
    {
       $this->db->select('*');
       $this->db->from('user');
       $this->db->join('set_mapel','set_mapel.guru = guru.id','left');
       
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