<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('head'); ?>

<body>

    <div id="wrapper">
		 <?php $this->load->view('nav'); ?>
	</div>
 	 <div id="page-wrapper">
 	    <h2>Form Edit Agenda</h2>        
        <fieldset>            
            <form action="<?php echo site_url('agenda/proses_edit_agenda');?>" method="POST">                
                Agenda : <br/><textarea name="nama" cols="50" rows="5"><?php echo $agenda->nama; ?></textarea>                
                <br/><br/>                
                Keterangan : <br/><textarea name="keterangan" cols="50" rows="5"><?php echo $agenda->keterangan; ?></textarea>                <br/><br/>                
                <input type="hidden" name="id" value="<?php echo $agenda->id; ?>" />                
                <input type="submit" value="Ubah" />            
            </form>        
        </fieldset> 


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