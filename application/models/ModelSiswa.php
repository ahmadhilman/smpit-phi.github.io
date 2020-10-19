<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelsiswa extends CI_Model
{
    public function simpan($data = null)
    {
        $this->db->insert('siswa', $data);
    }
public function update($data = null, $where = null)
    {
        $this->db->update('siswa', $data, $where);
    }
    public function cekData($where = null)
    { 
        return $this->db->get_where('siswa', $where);
    }
    public function cek($where = null)
    { 
        $this->db->select('*');
       $this->db->from('siswa');
       
        return $this->db->get_where();
    }
    public function hapus($where = null)
    {
        $this->db->delete('siswa', $where);
    }

    public function getWhere($nisn)
    {
       $this->db->select('*');
       $this->db->from('siswa');
       $this->db->where('nisn', $nisn);
       
       return $this->db->get()->result();
    }
       public function getsiswa($where = null)
    {
        return $this->db->get_where('siswa', $where);
    }

    public function ceksiswaAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getsiswaLimit()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
public function join($where)
    {
        $this->db->select('siswa.nis,siswa.nis');
        $this->db->from('siswa');
        $this->db->join('siswa','siswa.nis = siswa.nis');
        $this->db->where($where);
        return $this->db->get();
    }    }


