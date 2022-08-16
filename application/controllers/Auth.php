<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login Page';
            $this->load->view('auth/login');
        } else {
            // validasi succsess
            $this->_login();
        }
    }

    public function registrasi()
    {
        $data['title'] = 'Registrasi';
        $this->load->view('auth/registrasi');
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //$user = $this->db->get_where('user', ['password' => $password])->row_array();

        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'Username' => $user['username'],
                    'role_id'  => $user['role_id']
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert 
                alert-danger" role="alert"> Password Salah! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert 
            alert-danger" role="alert"> Username Tidak ada! </div>');
            redirect('auth');
        }
    }
}
