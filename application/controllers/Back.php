<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Back extends CI_Controller
{

    public function index(){
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('layoutB/template');
        $this->load->view('layoutB/footer2');
    }
}