<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_barang');
    }

public function index(){
	$listing = $this->M_barang->listing();
	$data = array('title' 	 => 'Data Barang',
				  'isi'		 => 'admin/barang/list_barang',
				  'tb_barang'=> $listing
    			  );
	$this->load->view('admin/dashboard',$data);
}

}