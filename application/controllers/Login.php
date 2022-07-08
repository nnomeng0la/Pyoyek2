<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Login extends CI_Controller
{
    public function index()
    {
 
        $data =[];
        $this->load->view('layoutF/header');
        $this->load->view('login', $data);
        $this->load->view('layoutF/footer');
        
    }

    public function otentikasi(){

        $this->load->model('users_model', 'users');
        
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->users->login($_username, $_password);

        if(isset($row)){ // Jika User ada atau terdaftar

            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USER', $row);

            if ($this->session->userdata('ROLE') == 'administrator') {
                redirect(base_url() . 'index.php/kegiatan');

            } else{
                redirect(base_url() . 'index.php/');

            }

            

        } else{ // Jika User tidak ada atau tidak terdaftar atau username/password salah
            redirect(base_url() . 'index.php/login?status=f');


        }
    }

    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USE');
        redirect(base_url() . 'index.php/login');
    }
}
