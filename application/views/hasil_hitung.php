<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('head'); ?>

<body>

    <div id="wrapper">
		 <?php $this->load->view('nav'); ?>
	</div>
 	 <div id="page-wrapper">
 	  <h1>Hasil Hitung</h1>        
 	  <h4>Hasil Perhitungan dari <?php echo $angka1." ".$pilih_operator." ".$angka2." adalah ". $hasil; ?> </h4>
        <br>
        <h5><a href="<?php echo site_url('calculator/'); ?>">Kembali Menghitung</a></h5>


 	</div>
 	<script src="http://localhost/latihan_CI/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/latihan_CI/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://localhost/latihan_CI/assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://localhost/latihan_CI/assets/vendor/raphael/raphael.min.js"></script>
    <script src="http://localhost/latihan_CI/assets/vendor/morrisjs/morris.min.js"></script>
    <script src="http://localhost/latihan_CI/assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://localhost/latihan_CI/assets/dist/js/sb-admin-2.js"></script>
 </body>

</html>