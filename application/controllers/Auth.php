<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('auth_m');
  }

  //LOGIN,LOGOUT & RESET PASSWORD DISTRIBUTOR
  function index()
  {
    if ($this->session->userdata('authenticated'))
      redirect('index'); // Jika user sudah login (Session authenticated ditemukan)
    $data['title'] = 'Login Page';
    $this->load->view('login', $data);
  }

  function cek_login()
  {
    // VARIABEL
      $username = str_replace("'", "", htmlspecialchars($this->security->xss_clean($this->input->post('username')), ENT_QUOTES));
      $password = str_replace("'", "", htmlspecialchars($this->security->xss_clean(md5($this->input->post('password'))), ENT_QUOTES));
    // VARIABEL
    
    // PROSES LOGIN DISTRIBUTOR
        $user = $this->auth_m->get($username);
        if (empty($user)) {
          $this->session->set_flashdata('error', 'Username tidak ditemukan');
          redirect('auth');
        } else {
          if ($password == $user->password) {
            $session = array(
              'authenticated' => true,
              'id' => $user->id,
              'username' => $user->username,
              'nama' => $user->nama,
              'role' => $user->role,
              'foto' => $user->foto
            );
            $this->session->set_userdata($session);
            redirect('index');
          } else {
            $this->session->set_flashdata('error', 'Password salah');
            redirect('auth');
          }
        }
    // PROSES LOGIN DISTRIBUTOR
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }

  function forgot()
  {
    $data['title'] = 'Forgot Password Page';
    $this->load->view('forgot',$data);
  }

  function reset()
  { 
    // Variabel
      $username = str_replace("'", "", htmlspecialchars($this->security->xss_clean($this->input->post('username')), ENT_QUOTES));
      $password = str_replace("'", "", htmlspecialchars($this->security->xss_clean(md5($this->input->post('password'))), ENT_QUOTES));
    // Variabel

    $cek_username = $this->auth_m->getUser($username);
    if ($cek_username == 0) {
      $this->session->set_flashdata('error', 'Username Tidak Ditemukan. Silahkan Hubungi Admin');
      redirect('auth/forgot');
    } else {
      $this->auth_m->UpdatePassword($username, $password);
      $this->session->set_flashdata('success', 'Password Berhasil Direset');
      redirect('auth');
    }
  }

}
