<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Daftar extends CI_Controller
{

    public function index()
    {
        $this->load->model('daftar_model', 'daftar');
        $list_daftar = $this->daftar->getAll();

        $data['list_daftar'] = $list_daftar;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('daftar/index', $data);
        $this->load->view('LayoutB/footer2');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('daftar_model', 'daftar');
        $data['daftar'] = $this->daftar->findById($_id);

        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('daftar/view', $data);
        $this->load->view('layoutB/footer2');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola Pendaftaran';
        $this->load->model('users_model', 'users');
        $data['list_users'] = $this->users->getAll();

        $this->load->model('kegiatan_model', 'kegiatan');
        $data['list_kegiatan'] = $this->kegiatan->getAll();

        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $data['list_kategori_peserta'] = $this->kategori_peserta->getAll();
        
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('daftar/create', $data);
        $this->load->view('layoutB/footer2');
    }
    public function save()
    {
        // Load model 
        $this->load->model('daftar_model', 'daftar');

        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_daftar[] = $_alasan; // ? 3
        $data_daftar[] = $_users_id; // ? 4
        $data_daftar[] = $_kegiatan_id; // ? 5
        $data_daftar[] = $_kategori_peserta_id; // ? 6
        $data_daftar[] = $_nosertifikat; // ? 7

        if (isset($_idedit)) {
            //update data lama
            $data_daftar[] = $_idedit; // ? 8
            $this->daftar->update($data_daftar);
        } else { // save data baru
            // panggi fungsi save di model 
            $this->daftar->save($data_daftar);
        }

        
        if ($this->session->userdata('ROLE') == 'public') {
            redirect(base_url() . 'index.php/' , 'refresh');
        }


        redirect(base_url() . 'index.php/daftar/' , 'refresh');
    }

    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("daftar_model", "daftar");

        $this->load->model("kegiatan_model", "kegiatan");
        $data['list_kegiatan'] = $this->kegiatan->getAll();

        $this->load->model('users_model', 'users');
        $data['list_users'] = $this->users->getAll();

        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $data['list_kategori_peserta'] = $this->kategori_peserta->getAll();

        $daftaredit = $this->daftar->findById($_id);


        $data['judul'] = 'Form Update Pendaftaran';
        $data['daftaredit'] = $daftaredit;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('daftar/update', $data);
        $this->load->view('layoutB/footer2');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("daftar_model", "daftar");
        $this->daftar->delete($_id);
        redirect(base_url() . 'index.php/daftar', 'refresh');
    }
}
