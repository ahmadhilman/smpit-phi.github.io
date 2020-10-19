<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelgallery extends CI_Model
{
    public function simpangallery($data = null)
    {
        $this->db->insert('gallery', $data);
    }
public function updategallery($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('gallery', $data);
    }
    public function cekgallery($where = null)
    {
        return $this->db->get_where('gallery', $where)->result();
    }
    public function hapusgallery($where = null)
    {
        $this->db->delete('gallery', $where);
    }

    public function getgalleryWhere($where = null)
    {
       $this->db->select('gallery.*,count(detail_gallery.id_gallery) as jml_foto');
       $this->db->from('gallery');
       $this->db->join('detail_gallery', 'detail_gallery.id_gallery = gallery.id', 'left');
       $this->db->group_by('gallery.id');
       $this->db->order_by('gallery.id', 'desc');
       return $this->db->get()->result();
    }
 public function getWhere($id)
    {
       $this->db->select('*');
       $this->db->from('gallery');
       // $this->db->join('kategori', 'kategori.id_kat = gallery.kategori', 'left');
       
       $this->db->where('id', $id);

       
       return $this->db->get()->row();
    }
     public function detailWhere($id)
    {
       $this->db->select('*');
       $this->db->from('detail_gallery');
       // $this->db->join('kategori', 'kategori.id_kat = gallery.kategori', 'left');
       
       $this->db->where('id', $id);

       
       return $this->db->get()->row();
    }
        
        public function galleryWhere($id)
    {
       $this->db->select('*');
       $this->db->from('detail_gallery');
       $this->db->where('id_gallery', $id);

       
       return $this->db->get()->result();
    }

    public function getgalleryLimit()
    {
        $this->db->select('*');
        $this->db->from('gallery');
        // $this->db->join('kategori', 'kategori.id_kat = gallery.kategori', 'left');
        // $this->db->join('user', 'user.id = gallery.id_user', 'left');
        $this->db->order_by('id','desc');
        $this->db->limit(6, 0);
        return $this->db->get()->result();
    }
   public function gallery($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('kategori', 'kategori.id_kat = gallery.kategori', 'left');
        // $this->db->join('user', 'user.id = gallery.id_user', 'left');
        $this->db->order_by('id','desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('kategori', 'kategori.id_kat = gallery.kategori', 'left');
        // $this->db->join('user', 'user.id = gallery.id_user', 'left');
        $this->db->order_by('id','desc');
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }
    public function total()
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('kategori', 'kategori.id_kat = gallery.kategori', 'left');
        $this->db->order_by('id','desc');
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
    public function getGallery($where = null)
    {
       $this->db->select('*');
       $this->db->from('gallery');      
       $this->db->order_by('id','desc'); 
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
        $this->db->limit(6, 0);
        return $this->db->get()->result();
    }

}


