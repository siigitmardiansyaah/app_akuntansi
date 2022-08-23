<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require_once 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Unggah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('upload_m');
        if (!$this->session->userdata('authenticated'))
        redirect('auth');
    }

    function index()
    {
        $data['title'] = 'Upload Data Akun';
        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('upload', $data);
        $this->load->view('layouts/js');
        $this->load->view('js/upload_js',$data);
        $this->load->view('layouts/footer');
    }

    function reset()
  {
    $filename = $this->uri->segment(3);
    unlink("./excel/$filename");
    redirect('unggah');
  }

  function form()
  {
    //SCRIPT UNTUK TANGKAP FILE EXCEL
    $this->load->library('upload');
    $data = array();
    $config['upload_path'] = './excel/';
    $config['allowed_types'] = 'xlsx';
    $config['max_size']  = '5012';
    $config['overwrite'] = true;
    $this->upload->initialize($config);
    $this->upload->do_upload('file');
    $filename = $this->upload->data('file_name');
    //SCRIPT UNTUK TANGKAP FILE EXCEL
    //SCRIPT SIMPAN SEMENTARA FILE EXCEL DAN LOAD DATA EXCEL
    $upload = $this->upload_m->upload_file($filename);
    if ($upload['result'] == "success") {
      $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); 
      $loadexcel = $reader->load('excel/' .  $filename);
      $sheet_name = $loadexcel->getSheetNames();
      $data['sheet_name'] = $sheet_name;
    } else {
      $this->session->set_flashdata('error', $upload['error']);
    }
    //SCRIPT SIMPAN SEMENTARA FILE EXCEL DAN LOAD DATA EXCEL

    $data['title'] = "Unggah Form";
    $data['filename'] = $filename;
    $this->load->view('layouts/head', $data);
    $this->load->view('layouts/sidebar');
    $this->load->view('upload_form', $data);
    $this->load->view('layouts/js');
    $this->load->view('js/form_js');
    $this->load->view('layouts/footer');
  }

  function tampil_data()
  {
    //TANGKAP INPUTAN
    $filename = $this->input->post('nama_file');
    $bulan = $this->input->post('bulan');
    $tahun = $this->input->post('tahun');
    $set = $this->input->post('nama_sheet');
    //TANGKAP INPUTAN

    //TANGKAP DATA EXCEL SESUAI SHEET DAN TANGKAP NAMA SHEET
    $data = array();
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); 
    $loadexcel = $reader->load('excel/' . $filename);
    $sheet_name = $loadexcel->getSheetNames();
    $sheet = $loadexcel->getSheetByName("$set")->toArray(null, true, true, true);
    $data['sheet'] = $sheet;
    $data['sheet_name'] = $sheet_name;
    //TANGKAP DATA EXCEL SESUAI SHEET DAN TANGKAP NAMA SHEET
    
    $data['title'] = "Data Akun";
    $data['tahun'] = $tahun;
    $data['bulan'] = $bulan;
    $data['nama_file'] = $filename;
    $data['set'] = $set;
    
    foreach($data['sheet'] as $row) {
        if (($row['B'] !== '' && $row['B'] !== null && $row['B'] !== 'Nama Akun' && $row['B'] !== 'TOTAL')) {
        echo $row['B'].'<br/>';
        echo $row['C'].'<br/>';
        echo $row['H'].'<br/>';
        }
    }

    // $this->load->view('layouts/head', $data);
    // $this->load->view('layouts/sidebar');
    // $this->load->view('upload_tampil', $data);
    // $this->load->view('layouts/js');
    // $this->load->view('js/tampil_js', $data);
    // $this->load->view('layouts/footer');
  }

  function data_tampil()
  {
     //TANGKAP INPUTAN
     $filename = $this->input->post('file');
     $bulan = $this->input->post('bulan');
     $tahun = $this->input->post('tahun');
     $set = $this->input->post('nama_sheet');
     //TANGKAP INPUTAN
 
     //TANGKAP DATA EXCEL SESUAI SHEET DAN TANGKAP NAMA SHEET
     $data = array();
     $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); 
     $loadexcel = $reader->load('excel/' . $filename);
     $sheet_name = $loadexcel->getSheetNames();
     $sheet = $loadexcel->getSheetByName("$set")->toArray(null, true, true, true);
     $data['sheet'] = $sheet;
     $data['sheet_name'] = $sheet_name;
     //TANGKAP DATA EXCEL SESUAI SHEET DAN TANGKAP NAMA SHEET
     
     $data['title'] = "Data Akun";
     $data['tahun'] = $tahun;
     $data['bulan'] = $bulan;
     $data['nama_file'] = $filename;
     $data['set'] = $set;
     $this->load->view('layouts/head', $data);
     $this->load->view('layouts/sidebar');
     $this->load->view('upload_tampil', $data);
     $this->load->view('layouts/js');
     $this->load->view('js/tampil_js', $data);
     $this->load->view('layouts/footer');
  }

  function import($filename, $set, $bulan, $tahun)
  {
  // TANGKAP INPUTAN
    $nama = $this->session->userdata('nama');
    $nama_file = $this->uri->segment(3);
    $sheet_name =  $this->uri->segment(4);
    $bulan = $this->uri->segment(5);
    $tahun = $this->uri->segment(6);
  // TANGKAP INPUTAN

  // LOAD DATA DARI FILE EXCEL
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); 
    $loadexcel = $reader->load('excel/' . $nama_file);
    $sheet = $loadexcel->getSheetByName("$sheet_name")->toArray(null, true, true, true);
  // LOAD DATA DARI FILE EXCEL

  // // VARIABEL ARRAY PUS
            $data = array();
  // // VARIABEL ARRAY PUS

  // LOOPING DATA PUS DARI EXCEL
            foreach ($sheet as $row) {
            if (($row['C'] !== '' && $row['C'] !== null) && ($row['H'] !== '' && $row['H'] !== null && $row['H'] !== ' - ' && $row['H'] != 0  || $row['I'] !== '' && $row['I'] !== null && $row['I'] != 0 && $row['I'] !== ' - '))
            {

              $no_akun = $row['C'];
              $nama_akun = $row['B'];
              $kredit =  str_replace(",", "", $row['I']);
              $debit = str_replace(",", "", $row['H']);
              if($debit == null || $debit == '' || $debit == '-')
              {
                $debit = 0;
              }else{
                $debit = $debit;
              }

              if($kredit == null || $kredit == '' || $kredit == '-')
              {
                $kredit = 0;
              }else{
                $kredit = $kredit;
              }

            // ARRAY AKUN
                if ($no_akun != null) {
                  array_push($data, array(
                    'no_akun' => $no_akun,
                    'nama_akun' => $nama_akun,
                    'debit' => $debit,
                    'kredit' => $kredit,
                    'bulan' => $bulan,
                    'tahun' => $tahun,
                    'dibuat_oleh' => $nama,
                    'tanggal_buat' => date('Y-m-d H:i:s'),
                    'diedit_oleh' => '',
                    'tanggal_edit' =>'',
                  ));
                }
 
            }
        }
  // LOOPING DATA PUS DARI EXCEL
           
  // // NOTIF JIKA DATA BARANG KOSONG
            if ($data == null) {
                $this->session->set_flashdata('error', 'Data Jumlah Akun Tidak Boleh Kosong');
              unlink("./excel/$filename");
              redirect('unggah');
            }
  // // NOTIF JIKA DATA BARANG KOSONG
           $array = array_unique($data, SORT_REGULAR);
           $tempArr = array_unique(array_column($data, 'ITEM_CODE'));
           $new_karton_pus = array_intersect_key($data, $tempArr);
   
  // Insert Karton
                if (count($new_karton_pus) != 0) {
                  foreach ($new_karton_pus as $dpk) {
                    $new_karton = array(
                      'no_akun' => $dpk['no_akun'],
                      'nama_akun' => $dpk['nama_akun'],
                      'debit' => $dpk['debit'],
                      'kredit' => $dpk['kredit'],
                      'bulan' => $dpk['bulan'],
                      'tahun' => $dpk['tahun'],
                      'dibuat_oleh' => $dpk['dibuat_oleh'],
                      'tanggal_buat' => $dpk['tanggal_buat'],
                      'diedit_oleh' => $dpk['diedit_oleh'],
                      'tanggal_edit' => $dpk['tanggal_edit']
                    );
                    $query = $this->upload_m->insert_do($new_karton);
                  }
                }
  // Insert Karto
              
            $this->session->set_flashdata('success', "Data berhasil di unggah");
              unlink("./excel/$filename");
              redirect('pesanan');
  
  } 
}



