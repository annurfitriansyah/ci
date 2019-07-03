<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">


    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Halaman Pendaftaran</title>

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


    <div class="account-pages"></div>
    <div class="clearfix"></div>

    <div class="wrapper-page">
        <div class="card-box">
            <div class="panel-heading">

                <!--<h3 class="text-center"> Sign In to</h3> -->
            </div>

            <center>
                <div class=logo>
                    <h1>Daftar</h1>
                </div>
            </center>


            <div class="panel-body">
                <form id="form_daftar" class="form-horizontal m-t-20" action="<?php echo base_url() . 'daftar'; ?>" method="POST">

                    <input type="hidden" name="id">
                    <input type="hidden" name="level" value="1">

                    <div class="form-group ">
                        <div class="col-xs-12">

                            <input class="form-control" name="nik" id="nik" type="text" onkeypress="return hanyaAngka(event)" minlength="10" maxlength="15" value="<?= set_value('nik') ?>" placeholder="NIK">
                            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">

                            <input class="form-control" type="text" name="nama" id="nama" value="<?= set_value('nama') ?>" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">

                            <input class="form-control" type="email" name="email" value="<?= set_value('email') ?>" id="email" placeholder="E-mail">
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">

                            <input class="form-control" name="notel" id="notel" type="text" placeholder="No Telpon" value="<?= set_value('notel') ?>" maxlength="13" minlength="10" onkeypress="return hanyaAngka(event)">
                            <?= form_error('notel', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">

                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" minlength="8">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox-signup" type="checkbox">
                                <label id="checkbox-signup"> Tampilkan Password </label>
                            </div>
                        </div>

                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <select class="selectpicker m-b-0" data-live-search="true" name="id_masjid" id="namamasjid" data-style="btn-info btn-custom">
                                <option value>Pilih Masjid</option>
                                <?php foreach ($data->result() as $row) : ?>
                                <option data-icon="glyphicon-home" value="<?php echo $row->id_masjid; ?>">
                                    <?php echo $row->nama_masjid; ?></option>
                                <?php endforeach; ?>
                            </select>

                            <?= form_error('id_masjid', '<small class="text-danger">', '</small>'); ?>
                            <h5><a href="<?= site_url('masjid') ?>">Tambah Masjid</a></h5>

                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <textarea class="form-control" name="alamat" id="alamat" type="text" placeholder="Alamat Rumah"></textarea>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button id="btnSave" class="btn btn-info btn-custom btn-block text-uppercase waves-effect waves-light" type="submit">
                                Daftar
                            </button>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12">
                            <h5>Sudah Memiliki Akun ? <a href="<?= site_url('login') ?>">Masuk disini</a></h5>
                        </div>
                    </div>

                </form>
                <hr>

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
            chk = document.getElementById('checkbox-signup'),
            label = document.getElementById('checkbox-signup');


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

</body>

</html> 