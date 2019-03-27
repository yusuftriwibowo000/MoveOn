<?php

class Barang extends CI_Controller
{
    public function __construct()
    {   
        parent::__construct();
        $this->load->model('admin/Barang_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["barang"] = $this->Barang_Model->getAll();
        $this->load->view('admin/master/barang' , $data);
        
    }
    public function add()
    {   
        $barang = $this->Barang_Model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());
        if ($validation->run()){
            $barang->save();
            $this->session->set_flashdata('success' , 'berhasil disimpan');
            redirect('admin/master/barang/');
        }else{
            // redirect('admin/master');
        }
        
        
    }   
    public function edit($id = null)
    {
        if (isset($id)) redirect('admin/barang');

        $barang = $this->Barang_Model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->update();
            $this->session->set_flashdata('success' , 'Berhasil Disimpan');
        }
        $data["barang"] = $barang->getById($id);
        if (!$data["barang"]) show_404();
    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->Barang_Model->delete($id)){
            redirect(site_url('admin/master/barang'));
        }
    }


}

