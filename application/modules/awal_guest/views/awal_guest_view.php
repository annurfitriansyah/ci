<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    
    <link src="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link src="<?=base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <style type="text/css">
        .modalEdit{
            width: 100%;
        }
    </style>

		<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">

                            <div class="col-sm-12">

                                <h1 ><b>Dashboard </b></h1>
                                <p class="text-muted page-title-alt">Selamat Datang di Halaman Tamu !</p>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                        		<div class="widget-bg-color-icon card-box">
                                    <center>
                                    <div class="bg-icon bg-icon-custom pull-center">
                                        <i class="md md-event-available text-custom"></i>
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-dark"><b class="counter"><?php echo $kegiatan; ?></h3>
                                        <p class="text-muted">Total Kegiatan </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="http://localhost/CI/kegiatan_tamu">
                                        	<button class="btn btn-default">Lihat Kegiatan</button>
                                        </a>
                                    </div>

                                    <div class="clearfix"></div>
                                    </center>
                                </div>
                            </div>
                        
                            
                            <div class="col-lg-4">
                                <div class="widget-bg-color-icon card-box">
                                    <center>
                                    <div class="bg-icon bg-icon-danger pull-center">
                                        <i class="md md-live-help text-danger"></i>
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-dark"><b class="counter">Perlu Bantuan ?</h3>
                                        <p class="text-muted">Pertanyaan yang sering ditanyakan</p>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-danger">Manual Aplikasi </button>
                                    </div>
                                    <div class="clearfix"></div>
                                    </center>
                                </div>
                            </div> 

                            <div class="col-lg-4">
                                <div class="widget-bg-color-icon card-box">
                                    <center>
                                    <div class="bg-icon bg-icon-inverse pull-center">
                                        <i class="md md-local-library text-inverse"></i>
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-dark"><b class="counter">Cari Masjid </h3>
                                        <p class="text-muted">Cari sesuai yang diinginkan</p>
                                    </div>
                                    <div class="text-center">
                                        <a href="http://localhost/CI/kegiatan_tamu">
                                        <button class="btn btn-inverse">Lihat Daftar Masjid</button>
                                    </div>
                                    <div class="clearfix"></div>
                                    </center>
                                </div>
                            </div> 

                                                        

                        </div>
                 
                        	<!-- end col -->
                    
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right"><b>
                    © 2019. NBU.Soft reserved.
                    </b></footer>

            </div>
		


		

		<script src="<?=base_url();?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
		<script src="<?=base_url();?>assets/plugins/switchery/js/switchery.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
		<script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

		<script type="text/javascript" src="<?=base_url();?>assets/plugins/autocomplete/jquery.mockjax.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/plugins/autocomplete/countries.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/pages/autocomplete.js"></script>

		<script type="text/javascript" src="<?=base_url();?>assets/pages/jquery.form-advanced.init.js"></script>

		<script src="<?=base_url();?>assets/js/jquery.core.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.app.js"></script>

		<script type="text/javascript" src="<?=base_url();?>assets/plugins/parsleyjs/parsley.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>

