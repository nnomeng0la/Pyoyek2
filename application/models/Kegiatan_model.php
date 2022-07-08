<?php

class Kegiatan_model extends CI_Model
{

    private $table = "kegiatan";

    public function getAll()
    {
        $query =  $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {

        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data)
    {
        $sql = "INSERT INTO kegiatan 
            (judul,kapasitas,harga_tiket,tanggal,narasumber,tempat,pic,foto_flyer,jenis_id)
              VALUES (?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }
    public function update($data)
    {
        // UPDATE
        $sql = "UPDATE kegiatan SET judul=?,kapasitas=?,harga_tiket=?,
            tanggal=?,narasumber=?,tempat=?,pic=?,jenis_id=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($id)
    {
        // DELETE FROM kegiatan WHERE id = $id;
        $sql = "DELETE FROM kegiatan WHERE id=?";
        $this->db->query($sql, array($id));
    }
}
