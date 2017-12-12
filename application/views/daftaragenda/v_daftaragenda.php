<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('head'); ?>

<body>

    <div id="wrapper">
		 <?php $this->load->view('nav'); ?>
	</div>
 	 <div id="page-wrapper">
 	   <h2>Daftar Agenda</h2>        
            <a href="<?php echo site_url('agenda/t_agenda');?>">Tambah Agenda</a>        
            <br />        
            <br />
                    <?php foreach ($daftar_agenda as $agenda) {?>        
            <fieldset>            
                <h3><?php echo $agenda->nama;?></h3>
                            <a href="<?php echo site_url('agenda/edit_agenda/'.$agenda->id);?>">Edit</a> |
                                         <a href="<?php echo site_url('daftaragenda/delete_agenda/'.$agenda->id);?>">Delete</a>            
                                                <br /> 
                                                           <p>
                                                                <?php echo $agenda->keterangan;?>
                                                            </p>        
            </fieldset>
                    <br />
                            <?php } ?>


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