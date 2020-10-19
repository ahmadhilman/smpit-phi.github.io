<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelInfo extends CI_Model
{
    public function simpanBerita($data = null)
    {
        $this->db->insert('berita', $data);
    }
public function updateBerita($data)
    {
        $this->db->where('id_ber', $data['id_ber']);
        $this->db->update('berita', $data);
    }
    public function cekBerita($where = null)
    {
        return $this->db->get_where('berita', $where);
    }
    public function hapusBerita($where = null)
    {
        $this->db->delete('berita', $where);
    }

    public function getBeritaWhere($where = null)
    {
       $this->db->select('*');
       $this->db->from('berita');
       $this->db->join('kategori', 'kategori.id_kat = berita.kategori', 'left');
       
       return $this->db->get()->result();
    }
 public function getWhere($id_ber)
    {
       $this->db->select('*');
       $this->db->from('berita');
       $this->db->join('kategori', 'kategori.id_kat = berita.kategori', 'left');

       $this->db->where('id_ber', $id_ber);

       
       return $this->db->get()->row();
    }
     public function get($id_ber)
    {
       $this->db->select('*');
       $this->db->from('berita');

       $this->db->where('id_ber', $id_ber);

       
       return $this->db->get()->row();
    }   

    public function getBeritaLimit()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kat = berita.kategori', 'left');
        $this->db->join('user', 'user.id = berita.id_user', 'left');
        $this->db->order_by('id_ber','desc');
        $this->db->limit(6, 0);
        return $this->db->get()->result();
    }
   public function berita($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kat = berita.kategori', 'left');
        $this->db->join('user', 'user.id = berita.id_user', 'left');
        $this->db->order_by('id_ber','desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }
    public function detail($id_ber)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kat = berita.kategori', 'left');
        $this->db->join('user', 'user.id = berita.id_user', 'left');
        $this->db->order_by('id_ber','desc');
        $this->db->where('id_ber', $id_ber);
        return $this->db->get()->result();
    }
    public function total()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kat = berita.kategori', 'left');
        $this->db->order_by('id_ber','desc');
        return $this->db->get()->result();
  
    }
    public function simpan($data = null)
    {
        $this->db->insert('pengumuman', $data);
    }
    public function cek($where = null)
    {
        return $this->db->get_where('pengumuman', $where);
    }
    public function getPeng($where = null)
    {
       $this->db->select('*');
       $this->db->from('pengumuman');       
       return $this->db->get()->result();
    }

    public function Where($id)
    {
       $this->db->select('*');
       $this->db->from('pengumuman');

       $this->db->where('id', $id);

       
       return $this->db->get()->row_array();
    }
public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('pengumuman', $data);
    }
    public function hapus($where = null)
    {
        $this->db->delete('pengumuman', $where);
    }
public function getLimit()
    {
        $this->db->select('*');
        $this->db->from('pengumuman');
        $this->db->order_by('id','desc');
        $this->db->limit(1, 0);
        return $this->db->get()->result();
    }
}


