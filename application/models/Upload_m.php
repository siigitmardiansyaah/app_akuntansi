<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Upload_m extends CI_Model
{


  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function upload_file($filename)
  {
    $this->load->library('upload');
    $config['upload_path'] = './excel/';
    $config['allowed_types'] = 'xlsx';
    $config['max_size']  = '5012';
    $config['overwrite'] = true;
    $config['file_name'] = $filename;
    $this->upload->initialize($config);
    if ($this->upload->do_upload('file')) {
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    } else {
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

}
