<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('head'); ?>

<body>

    <div id="wrapper">
		 <?php $this->load->view('nav'); ?>
	</div>
 	 <div id="page-wrapper">
 	<h1>Kalkulator CI</h1>        
 	<form action="<?php echo site_url('calculator/hasil_hitung');?>" method="POST">            
 		<input type="text" name="angka1"/> <br /><br/>            
 		<input type="text" name="angka2"/> <br /><br/>            
 		<select name="pilih-hitung">                
 			<option value="+">+</option>                
 			<option value="-">-</option>                
 			<option value="*">*</option>                
 			<option value="/">/</option>            
 		</select><br/><br/>            
 		<input type="submit" value="Hitung" />        
 	</form>    
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