<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {
	public function listing(){
    	$this->db->select('tb_barang.*');
    	$this->db->from('tb_barang');
    	$this->db->order_by('kode_barang','ASC');
    	$query = $this->db->get();
    	return $query->result();
    }
}