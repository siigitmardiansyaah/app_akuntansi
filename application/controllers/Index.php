<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_m');
        if (!$this->session->userdata('authenticated'))
        redirect('auth');
    }

    function index()
    {
        $tahun = date('Y');
        $bulan = date('n');
        if($bulan == '1') {
            $bulan = 'Januari';
        }else if($bulan == '2') {
            $bulan = 'Februari';
        }else if($bulan == '3') {
            $bulan = 'Maret';
        }else if($bulan == '4'){
            $bulan = 'April';

        }else if($bulan == '5') {
            $bulan = 'Mei';

        }else if($bulan == '6') {
            $bulan = 'Juni';

        }else if($bulan == '7') {
            $bulan = 'Juli';

        }else if($bulan == '8') {
            $bulan = 'Agustus';

        }else if($bulan == '9') {
            $bulan = 'September';

        }else if($bulan == '10') {
            $bulan = 'Oktober';

        }else if($bulan == '11') {
            $bulan = 'November';

        }else{
            $bulan = 'Desember';

        }
        //PENDAPATAN
        $data['pendapatan1'] = $this->laporan_m->getData($bulan,$tahun,'4000.01');
        $data['pendapatan2'] = $this->laporan_m->getData($bulan,$tahun,'4000.02');
        $data['pendapatan3'] = $this->laporan_m->getData($bulan,$tahun,'4000.03');
        $data['pendapatan4'] = $this->laporan_m->getData($bulan,$tahun,'4000.04');
        $data['pendapatan5'] = $this->laporan_m->getData($bulan,$tahun,'4000.05');
        $data['pendapatan6'] = $this->laporan_m->getData($bulan,$tahun,'4000.08');
        //PENDAPATAN

        //PIUTANG
        $data['piutang_usaha'] = $this->laporan_m->getData($bulan,$tahun,'1100');
        $data['piutang_barang'] = $this->laporan_m->getData($bulan,$tahun,'1100.01');
        $data['piutang_pinjaman'] = $this->laporan_m->getData($bulan,$tahun,'1100.05');
        //PIUTANG

        //HUTANG
        $data['hutang_pajak'] = $this->laporan_m->getData($bulan,$tahun,'2000.05');
        $data['hutang_dansos'] = $this->laporan_m->getData($bulan,$tahun,'2000.06');
        $data['hutang_sejahtera'] = $this->laporan_m->getData($bulan,$tahun,'2000.07');
        $data['hutang_pajda'] = $this->laporan_m->getData($bulan,$tahun,'2000.08');
        $data['hutang_pendidikan'] = $this->laporan_m->getData($bulan,$tahun,'2000.09');
        $data['hutang_bagi'] = $this->laporan_m->getData($bulan,$tahun,'2000.11');
        $data['hutang_pengawas'] = $this->laporan_m->getData($bulan,$tahun,'2000.13');
        $data['hutang_pembangunan'] = $this->laporan_m->getData($bulan,$tahun,'2000.14');
        //HUTANG
        $data['title'] = 'Dashboard';
        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('index', $data);
        $this->load->view('layouts/js');
        $this->load->view('layouts/footer');
    }
}
