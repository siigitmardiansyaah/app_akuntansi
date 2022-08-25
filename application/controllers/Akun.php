<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_m');
        if (!$this->session->userdata('authenticated'))
        redirect('auth');
    }

    function index()
    {
        $data['title'] = 'Data Akun';
        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('akun', $data);
        $this->load->view('layouts/js');
        $this->load->view('js/akun_js');
        $this->load->view('layouts/footer');
    }

    public function ajax_list()
    {
        $list = $this->akun_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->no_akun;
            $row[] = $customers->nama_akun;
            $row[] = $customers->debit;
            $row[] = $customers->kredit;
            $row[] = $customers->bulan;
            $row[] = $customers->tahun;
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$customers->id_akun."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$customers->id_akun."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->akun_m->count_all(),
                        "recordsFiltered" => $this->akun_m->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->akun_m->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add()
    {         
        $nama = $this->session->userdata('nama');
        $data = array(
                'no_akun' => $this->input->post('no_akun'),
                'nama_akun' => $this->input->post('nama_akun'),
                'debit' => $this->input->post('debit'),
                'kredit' => $this->input->post('kredit'),
                'bulan' => $this->input->post('bulan1'),
                'tahun' => $this->input->post('tahun'),
                'dibuat_oleh' => $nama,
                'tanggal_buat' => date('Y-m-d H:i:s'),
            );
 
        $insert = $this->akun_m->save($data);
 
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $nama = $this->session->userdata('nama');
        $data = array(
            'no_akun' => $this->input->post('no_akun'),
                'nama_akun' => $this->input->post('nama_akun'),
                'debit' => $this->input->post('debit'),
                'kredit' => $this->input->post('kredit'),
                'bulan' => $this->input->post('bulan1'),
                'tahun' => $this->input->post('tahun1'),
                'diedit_oleh' => $nama,
                'tanggal_edit' => date('Y-m-d H:i:s'),
            );
 
        $this->akun_m->update(array('id_akun' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->akun_m->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}
