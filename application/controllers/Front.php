<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Front extends CI_Controller
{

    public function index(){

        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $list_jenis_kegiatan = $this->jenis_kegiatan->getAll();
        $data['list_jenis_kegiatan'] = $list_jenis_kegiatan;

        $this->load->model('kegiatan_model', 'kegiatan');
        $list_kegiatan = $this->kegiatan->getAll();
        $data['list_kegiatan'] = $list_kegiatan;
        
        $this->load->view('layoutF/header');
        $this->load->view('front/index', $data);
        $this->load->view('layoutF/footer');
    }

    public function registrasi(){


        $data = [];
        $this->load->model('users_model', 'users');
        $data['list_users'] = $this->users->getAll();

        $this->load->model('kegiatan_model', 'kegiatan');
        $data['list_kegiatan'] = $this->kegiatan->getAll();

        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $data['list_kategori_peserta'] = $this->kategori_peserta->getAll();

        $this->load->view('front/registrasi', $data);

    }
}