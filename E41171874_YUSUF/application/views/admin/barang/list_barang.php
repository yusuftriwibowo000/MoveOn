<p><a href="<?php echo base_url('admin/barang/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a></p>

<?php
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<table class="table table-striped table-bordered table-hover" <!-- id="dataTables-example -->">
  <thead>
    <tr>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Deskripsi</th>
      <th>Stok</th>
      <th>Harga</th>
      <th width="200">Action</th>
    </tr>
  </thead>
  <?php
    foreach ($tb_barang as $row) :
  ?>
  <tbody>
    <tr class="odd gradeX">
      <th scope="row"><?php echo $row->kode_barang;?></th>
      <td><?php echo $row->nama_barang;?></td>
      <td><?php echo $row->deskripsi;?></td>
      <td><?php echo $row->stok_barang;?></td>
      <td><?php echo $row->harga_barang;?></td>
      <td>
        <a href="<?php echo base_url('admin/barang/edit/'.$row->kode_barang) ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i> Edit</a>
        <a href="<?php echo base_url('admin/barang/delete/'.$row->kode_barang) ?>" class="btn btn-danger btn-sm" title="Hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i> Delete</a>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>