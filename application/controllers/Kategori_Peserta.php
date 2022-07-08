<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Kategori_Peserta extends CI_Controller
{

    public function index()
    {
        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $list_kategori_peserta = $this->kategori_peserta->getAll();

        $data['list_kategori_peserta'] = $list_kategori_peserta;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('kategori_peserta/index', $data);
        $this->load->view('LayoutB/footer2');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $data['kategori_peserta'] = $this->kategori_peserta->findById($_id);

        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('kategori_peserta/view', $data);
        $this->load->view('layoutB/footer2');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola Referensi Kategori Peserta';
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('kategori_peserta/create', $data);
        $this->load->view('layoutB/footer2');
    }
    public function save()
    {
        // Load model 
        $this->load->model('kategori_peserta_model', 'kategori_peserta');

        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_kategori_peserta[] = $_nama; // ? 2


        if (isset($_idedit)) {
            //update data lama
            $data_kategori_peserta[] = $_idedit; // ? 8
            $this->kategori_peserta->update($data_kategori_peserta);
        } else { // save data baru
            // panggi fungsi save di model 
            $this->kategori_peserta->save($data_kategori_peserta);
        }


        redirect(base_url() . 'index.php/kategori_peserta/' , 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("kategori_peserta_model", "kategori_peserta");
        $kategori_pesertaedit = $this->kategori_peserta->findById($_id);

        $data['judul'] = 'Form Update Kelola Referensi Jenis Kegiatan';
        $data['kategori_pesertaedit'] = $kategori_pesertaedit;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('kategori_peserta/update', $data);
        $this->load->view('layoutB/footer2');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("kategori_peserta_model", "kategori_peserta");
        $this->kategori_peserta->delete($_id);
        redirect(base_url() . 'index.php/kategori_peserta', 'refresh');
    }
}
