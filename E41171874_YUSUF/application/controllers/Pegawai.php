<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pegawai extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('kode_parts');
        if ($id == '') {
            $bengkel = $this->db->get('tb_barang')->result();
        } else {
            $this->db->where('kode_parts', $id);
            $bengkel = $this->db->get('tb_barang')->result();
        }
        $this->response($bengkel, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post() {
        $data = array(
                    'kode_parts'   => $this->post('kode_parts'),
                    'nama_parts'   => $this->post('nama_parts'),
                    'stok'         => $this->post('stok'),
                    'harga'        => $this->post('harga'));
        $insert = $this->db->insert('tb_barang', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini
}