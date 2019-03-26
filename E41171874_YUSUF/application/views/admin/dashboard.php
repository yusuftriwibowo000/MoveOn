
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- memanggil modul head.php -->
  <?php $this->load->view('admin/modul template/head');?>
</head>

<body id="page-top">

  <!-- Navbar -->
  <?php $this->load->view('admin/modul template/navbar');?>

  <div id="wrapper">

    <!-- Sidebar -->
  <?php $this->load->view('admin/modul template/sidebar');?>    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadchumbs-->
        <?php $this->load->view('admin/modul template/breadchumb');?>    

        <!-- Icon Cards-->
        <?php $this->load->view($isi);?>


      </div>
      <!-- /.container-fluid -->

      <!-- Footer -->
      <?php $this->load->view('admin/modul template/footer');?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view('admin/modul template/modal');?>

  <!-- Javascript -->
  <?php $this->load->view('admin/modul template/javascript');?>

</body>

</html>
