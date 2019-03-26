<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
        parent::__construct();
    }

public function index(){
	$data = array('title' => 'Dashboard',
				  'isi'	=> 'admin/dashboard/dashboard_1'
    			  );
	$this->load->view('admin/dashboard',$data);
}

}