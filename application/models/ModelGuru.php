<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelGuru extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('guru', $data);
    }
public function updateGuru($data)
    {
        $this->db->where('nip', $data['nip']);
        $this->db->update('guru', $data);
    }
    public function cekGuru($where = null)
    {
        return $this->db->get_where('guru', $where);
    }
    public function hapusGuru($where = null)
    {
        $this->db->delete('guru', $where);
    }
    public function getGuru($where = null)
    {
       $this->db->select('*');
       $this->db->from('guru');
       $this->db->join('jabatan', 'jabatan.id = guru.jabatan', 'left');
       return $this->db->get()->result();
    }
    public function getGuruWhere($where = null)
    {
       $this->db->select('*');
       $this->db->from('guru');
       $this->db->join('jabatan', 'jabatan.id = guru.jabatan', 'left');
       $this->db->where('level', 'guru');
       return $this->db->get()->result();
    }
    public function getUstadzWhere($where = null)
    {
       $this->db->select('*');
       $this->db->from('guru');
       $this->db->join('jabatan', 'jabatan.id = guru.jabatan', 'left');
       $this->db->where('level', 'ustadz');
       return $this->db->get()->result();
    }
 public function getWhere($nip)
    {
       $this->db->select('*');
       $this->db->from('guru');
       $this->db->join('jabatan', 'jabatan.id = guru.jabatan', 'left');

       $this->db->where('nip', $nip);

       
       return $this->db->get()->row();
    }
    public function get($nip)
    {
       $this->db->select('*');
       $this->db->from('guru');
       $this->db->where('nip', $nip);

       return $this->db->get()->row();
    }
        public function cekGuruAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getGuruLimit()
    {
        $this->db->select('*');
        $this->db->from('guru');
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
    }    
}


