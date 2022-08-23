<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('akun_m');
        if (!$this->session->userdata('authenticated'))
        redirect('auth');
    }

    function index()
    {
        // //JUMLAH PO YANG DIUPLOAD, NOT APPROVED DAN APPROVED
        // $data['ba'] = $this->dashboard_m->getBelumApprove($cust_code,$tempat);
        // $data['ta'] = $this->dashboard_m->getTidakApprove($cust_code,$tempat);
        // $data['app'] = $this->dashboard_m->Approve($cust_code,$tempat);
        // $data['app1'] = $this->dashboard_m->Approve1($cust_code,$tempat);
        //JUMLAH PO YANG DIUPLOAD, NOT APPROVED DAN APPROVED
        $data['title'] = '';
        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('index', $data);
        $this->load->view('layouts/js');
        $this->load->view('layouts/footer');
    }
}
