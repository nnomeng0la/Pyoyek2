<?php

class Users_model extends CI_Model
{

    private $table = "users";

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
        $sql = "INSERT INTO users 
            (username,password,email,created_at, last_login, status,role)
              VALUES (?,MD5(?),?,now(),now(),?,?)";
        $this->db->query($sql, $data);
    }
    public function registrasi($data)
    {
        $sql = "INSERT INTO users 
            (username,password,email,created_at, last_login, status,role)
              VALUES (?,MD5(?),?,now(),now(),'1','public')";
        $this->db->query($sql, $data);
    }
    
    public function update($data)
    {
        // UPDATE
        $sql = "UPDATE users SET username=?,password=MD5(?),email=?,
            status=?,role=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($id)
    {
        // DELETE FROM users WHERE id = $id;
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, array($id));
    }

    public function login($uname, $pass)
    {

        $sql = "SELECT * FROM users WHERE username =? AND password = MD5(?)";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function update_foto($array)
    {
        $sql = "UPDATE users SET foto=? WHERE  id=?";
        $this->db->query($sql, $array);

        
    }
}
