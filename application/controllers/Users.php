<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Users extends CI_Controller
{

    public function index()
    {
        $this->load->model('users_model', 'users');
        $list_users = $this->users->getAll();

        $data['list_users'] = $list_users;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('users/index', $data);
        $this->load->view('LayoutB/footer2');
    }


    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('users_model', 'users');
        $data['users'] = $this->users->findById($_id);

        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('users/view', $data);
        $this->load->view('layoutB/footer2');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola User';

        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('users/create', $data);
        $this->load->view('layoutB/footer2');
    }
    public function save()
    {
        // Load model 
        $this->load->model('users_model', 'users');

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');

        $_idedit = $this->input->post('idedit'); //hidden field

        $data_users[] = $_username; // ? 2
        $data_users[] = $_password; // ? 3
        $data_users[] = $_email; // ? 4
        $data_users[] = $_status; // ? 7
        $data_users[] = $_role; // ? 8

        if (isset($_idedit)) {
            //update data lama
            $data_users[] = $_idedit; // ? 8
            $this->users->update($data_users);
        } else { // save data baru
            // panggi fungsi save di model 
            $this->users->save($data_users);
        }


        redirect(base_url() . 'index.php/users');
    }

    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("users_model", "users");
        $usersedit = $this->users->findById($_id);

        $data['judul'] = 'Form Update User';
        $data['usersedit'] = $usersedit;
        $this->load->view('layoutB/header');
        $this->load->view('layoutB/sidebar');
        $this->load->view('users/update', $data);
        $this->load->view('layoutB/footer2');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("users_model", "users");
        $this->users->delete($_id);
        redirect(base_url() . 'index.php/users', 'refresh');
    }

    public function upload()
    {
        $config['upload_path']          = './uploads/users';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $_id = $this->input->post('id');
        $array = explode('.', $_FILES['fotousers']['name']);
        $ext = end($array);
        $new_name = 'user' . $_id . '.' . $ext;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('fotousers')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            // panggil model
            $this->load->model("users_model", "users");
            $array_data = $new_name; // ? 1
            $array_data = $_id; // ? 2

            // Update foto di tabel users
            $this->users->update_foto($array_data);

            $data = array('upload_data' => $this->upload->data());
            redirect(base_url() . 'index.php/users/view?id=' . $_id);


            $this->load->view('upload_success', $data);
        }
    }
}
