<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">
		
    	

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title>Ubold - Responsive Admin Dashboard Template</title>

		<link href="<?=base_url();?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
		<link href="<?=base_url();?>assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
		<link href="<?=base_url();?>assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
		<link href="<?=base_url();?>assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
		<link href="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

		<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=base_url();?>assets/js/modernizr.min.js"></script>

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>
		
		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					
					<!--<h3 class="text-center"> Sign In to</h3> -->
				</div>

				<center>
				<div class=logo>
				<h1>Tambah Data Masjid</h1><br>
				</div>
				</center>

				<div class="panel-body">
					<form id="form_tambah_masjid"  class="form-horizontal m-t-20" action="<?php echo site_url('masjid/tambah')?>" method="POST" >

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="namamasjid" id="namamasjid" required="" placeholder="Nama Masjid">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<select class="selectpicker m-b-0" data-style="btn-white" name="kategori_masjid" >
									<option value="0">Pilih Kategori Masjid</option>
									<option value="Raya">Masjid Raya</option>
									<option value="Agung">Masjid Agung</option>
									<option value="Besar">Masjid Besar</option>
									<option value="Jami">Masjid Jami</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="latitude" id="latitude" required="" placeholder="Lokasi Masjid (Latitude)">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="longitude" id="longitude" required="" placeholder="Lokasi Masjid (Longitude)">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<textarea class="form-control" name="alamat" id="alamat" type="text" required="" placeholder="Alamat" ></textarea>
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								
								<input type="file" class="filestyle" name="gambar" data-placeholder="Upload Gambar" data-buttonname="btn-info" data-buttontext="Pilih File" >
								
							</div>	
						</div>


						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button id="btnSave" onclick="save()" class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit" value="upload">
									Simpan Data Masjid 
								</button>
							</div>
						</div>

						
					</form>

				</div>
			</div>
			<div class="form-group text-center">
							<div class="col-xs-12">
								<h5>Kembali ke  <a href="<?=site_url('daftar')?>"> Daftar</a></h5>
							</div>
						</div>	

		</div>

		<script>
			var resizefunc = [];

		function save()
    	{
        $('#btnSave').text('Menyimpan.....'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        var url;
     
        
        url = "<?=site_url('masjid/tambah')?>";
        
     
        // ajax adding data to database
     
        var formData = new FormData($('#form_tambah_masjid')[0]);
        $.ajax({
            url : url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data)
            {
     
                if(data.status) //if success close modal and reload ajax table
                {
                   
					alert('Sukses Menyimpan');
					location.href="<?= site_url('daftar')?>";
					
                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++) 
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('Daftar'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
     
     
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Terjadi kesalahan saat menyimpan data');
                $('#btnSave').text('Coba Simpan Lagi '); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
     
            }
        });
    }

		</script>

		<!-- jQuery  -->
		<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url();?>assets/js/detect.js"></script>
		<script src="<?=base_url();?>assets/js/fastclick.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.slimscroll.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.blockUI.js"></script>
		<script src="<?=base_url();?>assets/js/waves.js"></script>
		<script src="<?=base_url();?>assets/js/wow.min.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.nicescroll.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.scrollTo.min.js"></script>

		<script src="<?=base_url();?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
		<script src="<?=base_url();?>assets/plugins/switchery/js/switchery.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
		<script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>


		<script type="text/javascript" src="<?=base_url();?>assets/pages/jquery.form-advanced.init.js"></script>

		<script src="<?=base_url();?>assets/js/jquery.core.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.app.js"></script>
	</body>
</html>

