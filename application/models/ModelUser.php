<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
public function updateUser($data = null, $where = null)
    {
        $this->db->update('user', $data, $where);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);

    }
        public function cek($where = null)
    { 
        $this->db->select('*');
       $this->db->from('user');
       $this->db->join('detail_user','detail_user.user=user.id','left');
        return $this->db->get_where();
    }
    public function hapususer($where = null)
    {
        $this->db->delete('user', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
       public function getsiswa($where = null)
    {
        return $this->db->get_where('siswa', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
public function join($where)
    {
        $this->db->select('user.nis,siswa.nis');
        $this->db->from('user');
        $this->db->join('siswa','siswa.nis = user.nis');
        $this->db->where($where);
        return $this->db->get();
    }    }


