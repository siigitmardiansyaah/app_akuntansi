<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Profile extends CI_Controller {     
    public function __construct()     {         
        parent::__construct();         
        if (!$this->session->userdata('authenticated'))
        redirect('auth');
        $this->load->model('users_m');
    }
 
    public function index()
    {
        $data['title'] = 'Profile Page';
        $iduser = $this->session->userdata('id');
        $data['profile'] = $this->db->query("SELECT * FROM users where id = '$iduser'")->row();
        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('profile', $data);
        $this->load->view('layouts/js');
        $this->load->view('layouts/footer');
        
    }

    function update() {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        if($password == null || $password == '') {
            $data = array(
                'username' => $username,
                'nama' => $nama
                );
        }else{
            $data = array(
                'username' => $username,
                'nama' => $nama,
                'password' => md5($this->input->post('password')),
                );
        }

        if($this->input->post('remove_photo')) // if remove photo checked
        {
            if(file_exists('upload/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                unlink('upload/'.$this->input->post('remove_photo'));
            $data['foto'] = '';
        }
 
        if(!empty($_FILES['photo']['name']))
        {
            $upload = $this->_do_upload();
             
            //delete file
            $person = $this->users_m->get_by_id($this->input->post('id'));
            if(file_exists('upload/'.$person->foto) && $person->foto)
                unlink('upload/'.$person->foto);
 
            $data['foto'] = $upload;
        }        
 
        $sukses = $this->users_m->update(array('id' => $id), $data);
        if($sukses) {
            $this->session->set_userdata('foto',$upload);
            $this->session->set_flashdata('success','Profile Berhasil Diupdate');
            redirect ('profile');
        }else{
            $this->session->set_flashdata('error','Profile Gagal Diupdate');
            redirect ('profile');
        }
    }
 
    private function _do_upload()
    {
        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000; //set max size allowed in Kilobyte
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }

 
}