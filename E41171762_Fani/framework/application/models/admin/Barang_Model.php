<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_Model extends CI_Model
{
    private $_table = "barang";

    // public $image = 'default.jpg';

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'hargabarang',
            'label' => 'hargabarang',
            'rules' => 'numeric'],

            ['field' => 'stokbarang',
            'label' => 'stokbarang',
            'rules' => 'numeric']

        ];
    }
    // Menampilkan DB
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
	{
		return $this->db->get_where($this->_table, ["idbarang"->$id])->row();
	}

	//CREAT = menghasilkan data
	public function save()
	{
		$post = $this->input->post();
        // $this->idbarang = uniqid();
        $this->kdbarang = $post["kdbarang"];
		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
        $this->stokbarang = $post["stokbarang"];
        $this->hargabarang = $post["hargabarang"];
		$this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->kdbarang = $post["kdbarang"];
		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
        $this->stokbarang = $post["stokbarang"];
        $this->hargabarang = $post["hargabarang"];
        $this->db->update($this->_table, $this, array('idbarang' => $post['id']));
    }
    public function delete($idbarang)
    {
        $this->db->where('idbarang',$idbarang);
        $this->db->delete('barang');
    }
}
?>