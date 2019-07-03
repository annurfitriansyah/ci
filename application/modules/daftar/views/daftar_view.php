<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">


    <link rel="shortcut icon" href="<?=base_url();?>assets/images/nbuaicon.png">

    <title>Halaman Pendaftaran</title>

    <!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
<!--===============================================================================================-->

    <link href="<?= base_url(); ?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />




    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

    <script src="<?= base_url(); ?>assets/js/modernizr.min.js">
    </script>
    <?php
		/*<script type='text/javascript'>
		var site = "<?php echo base_url(); ?>";
    $(function(){
    $('.form-control').daftar({
    // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
    serviceUrl: site+'/daftar/search',
    // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
    onSelect: function (suggestion) {
    $('#alamat').alamat(''+suggestion.alamat); // membuat id 'v_nim' untuk ditampilkan
    //$('#v_jurusan').val(''+suggestion.jurusan); // membuat id 'v_jurusan' untuk ditampilkan
    }
    });
    });
    </script>*/
	?>
</head>

<body>


    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="<?php echo base_url() . 'daftar'; ?>" method="POST" id="form_daftar" >
                    
					<span class="login100-form-title p-b-55">
						Daftar Akun
					</span>                    

                    <input type="hidden" name="id">
                    <input type="hidden" name="level" value="1">

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "NIK harus diisi">
						<input class="input100" type="text" name="nik" placeholder="NIK" onkeypress="return hanyaAngka(event)" minlength="10" maxlength="15" value="<?= set_value('nik') ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-license"></span>
						</span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Nama harus diisi">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email harus valid: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" value="<?= set_value('email') ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Nomor Telpon harus diisi">
						<input class="input100" type="text" name="notel" placeholder="Nomor Telpon" value="<?= set_value('notel') ?>" onkeypress="return hanyaAngka(event)" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-phone-handset"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password harus diisi">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
                    
					<div class="contact100-form-checkbox m-b-6">
						<input class="input-checkbox100" id="ckb1" type="checkbox">
						<label class="label-checkbox100" for="ckb1">
							Tampilkan Password
						</label>
					</div>

                    <div class="wrap-input100 m-b-16">
                    <input class="input100" name="alamat" id="alamat" placeholder="Alamat Rumah">
                    <span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-home"></span>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16">
                        <select class="selectpicker m-b-0" name="id_masjid" id="namamasjid"
                            data-style="btn-custom btn-white">
                            <option value>Pilih Masjid</option>
                            <?php foreach ($data->result() as $row) : ?>
                            <option data-icon="glyphicon-home" value="<?php echo $row->id_masjid; ?>">
                                <?php echo $row->nama_masjid; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
						<a href="<?= site_url('masjid') ?>" class="btn-face m-b-10">
						<i class="fa fa-plus"></i>
						Tambah Masjid
					</a>

                    
					<div class="container-login100-form-btn p-t-25">
						<button class="btn btn-custom btn-white btn-block" type="submit">
							Daftar
						</button>
					</div>

					<div class="text-center w-full p-t-25">
                        <span class="txt1">
							Sudah punya akun?
						<a class="txt1 bo1 hov1" href="<?= site_url('login') ?>">
							Masuk sekarang							
						</a></span>
					</div>
				</form>
			</div>
		</div>
	</div>


    <script>
        function save() {
            $('#btnSave').text('Menyimpan.....'); //change button text
            $('#btnSave').attr('disabled', true); //set button disable 
            var url;


            url = "<?= site_url('daftar/daftar_aksi') ?>";


            // ajax adding data to database

            var formData = new FormData($('#form_daftar')[0]);
            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data) {

                    if (data.status) //if success close modal and reload ajax table
                    {

                        alert('Berhasil Mendaftar');
                        location.href = "<?= site_url('login') ?>";

                    } else {
                        for (var i = 0; i < data.inputerror.length; i++) {
                            $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass(
                                'has-error'); //select parent twice to select div form-group class and add has-error class
                            $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[
                                i]); //select span help-block class set text error string
                        }
                    }
                    $('#btnSave').text('Daftar'); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable 


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Terjadi kesalahan saat menyimpan data');
                    $('#btnSave').text('Coba Simpan Lagi '); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable 

                }
            });
        }

        var masukanpass = document.getElementById('password'),
            chk = document.getElementById('ckb1'),
            label = document.getElementById('ckb1');


        chk.onclick = function() {

            if (chk.checked) {

                masukanpass.setAttribute('type', 'text');
                label.textContent = 'Hide Passowrd';
            } else {

                masukanpass.setAttribute('type', 'password');
                label.textContent = 'Show Passowrd';
            }

        }

        var resizefunc = [];

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>

    <!-- jQuery  -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/detect.js"></script>
    <script src="<?= base_url(); ?>assets/js/fastclick.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.blockUI.js"></script>
    <script src="<?= base_url(); ?>assets/js/waves.js"></script>
    <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

    <script src="<?= base_url(); ?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/switchery/js/switchery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js">
    </script>
    <script src="<?= base_url(); ?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript">
    </script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript">
    </script>


    <script type="text/javascript" src="<?= base_url(); ?>assets/pages/jquery.form-advanced.init.js"></script>

    <script src="<?= base_url(); ?>assets/js/jquery.core.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.app.js"></script>

<!--===============================================================================================-->	
	<script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html> 