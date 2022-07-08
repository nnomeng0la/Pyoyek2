<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Jenis_Kegiatan extends CI_Controller
{

    public function index()
    {
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $list_jenis_kegiatan = $this->jenis_kegiatan->getAll();

        $data['list_jenis_kegiatan'] = $list_jenis_kegiatan;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('jenis_kegiatan/index', $data);
        $this->load->view('LayoutB/footer2');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $data['jenis_kegiatan'] = $this->jenis_kegiatan->findById($_id);

        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('jenis_kegiatan/view', $data);
        $this->load->view('layoutB/footer2');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola Referensi Jenis Kegiatanan';
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('jenis_kegiatan/create', $data);
        $this->load->view('layoutB/footer2');
    }
    public function save()
    {
        // Load model 
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');

        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_jenis_kegiatan[] = $_nama; // ? 2


        if (isset($_idedit)) {
            //update data lama
            $data_jenis_kegiatan[] = $_idedit; // ? 8
            $this->jenis_kegiatan->update($data_jenis_kegiatan);
        } else { // save data baru
            // panggi fungsi save di model 
            $this->jenis_kegiatan->save($data_jenis_kegiatan);
        }


        redirect(base_url() . 'index.php/jenis_kegiatan/' , 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("jenis_kegiatan_model", "jenis_kegiatan");
        $jenis_kegiatanedit = $this->jenis_kegiatan->findById($_id);

        $data['judul'] = 'Form Update Kelola Referensi Jenis Kegiatan';
        $data['jenis_kegiatanedit'] = $jenis_kegiatanedit;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('jenis_kegiatan/update', $data);
        $this->load->view('layoutB/footer2');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("jenis_kegiatan_model", "jenis_kegiatan");
        $this->jenis_kegiatan->delete($_id);
        redirect(base_url() . 'index.php/jenis_kegiatan', 'refresh');
    }
}
