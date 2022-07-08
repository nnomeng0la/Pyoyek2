<?php

class Daftar_model extends CI_Model
{

    private $table = "daftar";

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
        $sql = "INSERT INTO daftar 
            (tanggal_daftar,alasan,users_id,kegiatan_id,kategori_peserta_id,nosertifikat)
              VALUES (now(),?,?,?,?,?)";
        $this->db->query($sql, $data);
    }
    public function update($data)
    {
        // UPDATE
        $sql = "UPDATE daftar SET alasan=?,users_id=?,
            kegiatan_id=?,kategori_peserta_id=?,nosertifikat=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($id)
    {
        // DELETE FROM daftar WHERE id = $id;
        $sql = "DELETE FROM daftar WHERE id=?";
        $this->db->query($sql, array($id));
    }
}
