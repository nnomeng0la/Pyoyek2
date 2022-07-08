<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Kegiatan extends CI_Controller
{

    public function index()
    {
        $this->load->model('kegiatan_model', 'kegiatan');
        $list_kegiatan = $this->kegiatan->getAll();

        $data['list_kegiatan'] = $list_kegiatan;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('kegiatan/index', $data);
        $this->load->view('LayoutB/footer2');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('kegiatan_model', 'kegiatan');
        $data['kegiatan'] = $this->kegiatan->findById($_id);

        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('kegiatan/view', $data);
        $this->load->view('layoutB/footer2');
    }
    public function create()
    {
        $data['judul'] = 'Form Kegiatan';

        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $data['list_jenis_kegiatan'] = $this->jenis_kegiatan->getAll();
        
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('kegiatan/create', $data);
        $this->load->view('layoutB/footer2');
    }
    public function save()
    {
        // Load model 
        $this->load->model('kegiatan_model', 'kegiatan');

        $_judul = $this->input->post('judul');
        $_kapasitas = $this->input->post('kapasitas');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_tanggal = $this->input->post('tanggal');
        $_narasumber = $this->input->post('narasumber');
        $_tempat = $this->input->post('tempat');
        $_pic = $this->input->post('pic');
        $_jenis_id = $this->input->post('jenis_id');
        $_idedit = $this->input->post('idedit'); //hidden field

        $allowedExtension = ['png', 'jpg', 'jpeg'];
        $_foto_flyer = $_FILES['foto_flyer']['name'];
        $explodedFilename = explode('.', $_foto_flyer);
        $extension = strtolower(end($explodedFilename));
        $temporaryFile = $_FILES['foto_flyer']['tmp_name'];

        if (in_array($extension, $allowedExtension) == true) {
              move_uploaded_file($temporaryFile, 'foto/' . $_foto_flyer);
        }

        
        $data_kegiatan[] = $_judul; // ? 2
        $data_kegiatan[] = $_kapasitas; // ? 3
        $data_kegiatan[] = $_harga_tiket; // ? 4
        $data_kegiatan[] = $_tanggal; // ? 5
        $data_kegiatan[] = $_narasumber; // ? 6
        $data_kegiatan[] = $_tempat; // ? 7
        $data_kegiatan[] = $_pic; // ? 8
        $data_kegiatan[] = $_jenis_id; // ? 10

        if (isset($_idedit)) {
            //update data lama
            $data_kegiatan[] = $_idedit; // ? 8
            $this->kegiatan->update($data_kegiatan);
        } else { // save data baru
            // panggi fungsi save di model 
            $this->kegiatan->save($data_kegiatan);
        }


        redirect(base_url() . 'index.php/kegiatan/' , 'refresh');
    }

    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("kegiatan_model", "kegiatan");
        $kegiatanedit = $this->kegiatan->findById($_id);
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $data['list_jenis_kegiatan'] = $this->jenis_kegiatan->getAll();

        $data['judul'] = 'Form Update Kegiatan';
        $data['kegiatanedit'] = $kegiatanedit;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('kegiatan/update', $data);
        $this->load->view('layoutB/footer2');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("kegiatan_model", "kegiatan");
        $this->kegiatan->delete($_id);
        redirect(base_url() . 'index.php/kegiatan', 'refresh');
    }
}
