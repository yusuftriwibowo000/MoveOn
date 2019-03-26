<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index(){
		echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	}

	public function hei(){
		$this->load->view('view_tugas');
    }
    
    function user(){
		$data['tb_mahasiswa'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}
    
}