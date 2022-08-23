<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Users extends CI_Controller {     
    public function __construct()     {         
        parent::__construct();         
        $this->load->model('users_m');
        if (!$this->session->userdata('authenticated'))
        redirect('auth');
    }
 
    public function index()
    {
        $data['title'] = 'Data Users';
        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('users', $data);
        $this->load->view('layouts/js');
        $this->load->view('js/users_js',$data);
        $this->load->view('layouts/footer');
        
    }
 
    public function ajax_list()
    { 
        $list = $this->users_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $no = 1;
        foreach ($list as $person) {
            $row = array();
            $row[] = $no++;
            $row[] = $person->username;
            $row[] = $person->nama;
            $row[] = $person->role;
            if($person->foto)
                $row[] = '<a href="'.base_url('upload/'.$person->foto).'" target="_blank"><img src="'.base_url('upload/'.$person->foto).'" class="img-responsive" width = "100" height="100" /></a>';
            else
                $row[] = '(No photo)';
 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->users_m->count_all(),
                        "recordsFiltered" => $this->users_m->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->users_m->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {         
        $data = array(
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'password' => md5($this->input->post('password')),
                'role' => $this->input->post('role'),
            );
 
        if(!empty($_FILES['photo']['name']))
        {
            $upload = $this->_do_upload();
            $data['foto'] = $upload;
        }
 
        $insert = $this->users_m->save($data);
 
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => md5($this->input->post('password')),
            'role' => $this->input->post('role'),
            );
 
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
            if(file_exists('upload/'.$person->photo) && $person->photo)
                unlink('upload/'.$person->photo);
 
            $data['foto'] = $upload;
        }
 
        $this->users_m->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        //delete file
        $person = $this->users_m->get_by_id($id);
        if(file_exists('upload/'.$person->photo) && $person->photo)
            unlink('upload/'.$person->photo);
         
        $this->users_m->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
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
 
    // private function _validate()
    // {
    //     $data = array();
    //     $data['error_string'] = array();
    //     $data['inputerror'] = array();
    //     $data['status'] = TRUE;
 
    //     if($this->input->post('username') == '')
    //     {
    //         $data['inputerror'][] = 'username';
    //         $data['error_string'][] = 'Username Wajib Diisi';
    //         $data['status'] = FALSE;
    //     }
 
    //     if($this->input->post('nama') == '')
    //     {
    //         $data['inputerror'][] = 'nama';
    //         $data['error_string'][] = 'Nama Wajib Diisi';
    //         $data['status'] = FALSE;
    //     }
 
    //     if($this->input->post('role') == '')
    //     {
    //         $data['inputerror'][] = 'role';
    //         $data['error_string'][] = 'Role Wajib Dipilih';
    //         $data['status'] = FALSE;
    //     }
 
    //     if($this->input->post('password') == '')
    //     {
    //         $data['inputerror'][] = 'password';
    //         $data['error_string'][] = 'Password Wajid Diisi';
    //         $data['status'] = FALSE;
    //     }
 
    //     if($data['status'] === FALSE)
    //     {
    //         echo json_encode($data);
    //         exit();
    //     }
    // }
 
}