<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->load->model('users_model', 'users');

        $data = [];
        $this->load->view('layoutF/header');
        $this->load->view('registrasi', $data);
        $this->load->view('layoutF/footer');
    }
}
