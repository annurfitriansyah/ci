<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<link href="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet"
    type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet"
    type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet"
    type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet"
    type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />

<link href="<?= base_url(); ?>assets/plugins/smoothproducts/css/smoothproducts.css" rel="stylesheet" type="text/css" />


<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

<!--TimePicker-->
<link href="<?= base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<script src="assets/js/modernizr.min.js"></script>

<link src="<?= base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<style type="text/css">
    .modalEdit {
        width: 100%;
    }
</style>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">

                    <div class="card-box product-detail-box">
                        <div class="row">

                            <div class="row">
                                <div class="text-center">
                                    <h2 class="font-600">Informasi Akun</h2><br><br>
                                </div>
                            </div>

                            

                            <div class="col-sm-6">
                                
                                <div class="card-box p-0">
                                    <div class="profile-widget text-center">
                                        <div class="bg-custom bg-profile"></div>
                                        <img src="<?= base_url('uploads/user/'.$gambar_profil) ?>"
                                            class="img img-thumbnail img-rounded " width="150px" height="150px" alt="img">
                                        <h4 class="text-capitalize"><b><?= $nama?></h4>
                                        <p class="text-muted"><i class="fa fa-map-marker"></i> <?= $alamat?></p>
                                        <p class="text-muted"><i class="fa fa-envelope"></i> <?= $email?></p>
                                        <p class="text-muted"><i class="fa fa-user-plus"></i> Masjid <?= $masjid?></p>
                                        <p class="text-muted"><i class="fa fa-unlock-alt"></i> <?= $level?></p> </b>

                                        <div class="bg-custom bg-profile  text-center">
                                            <ul class="list-inline widget-list clearfix">
                                                <br>
                                                <li class="col-md-4 text-white"><span><?= $id_jss?></span>ID JSS</li>
                                                <li class="col-md-4 text-white"><span><?= $nik?></span>NIK</li>
                                                <li class="col-md-4 text-white"><span><?= $no_telpon?></span>No Telpon
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            
                            <div class="col-sm-6">
                                <?php $info=$this->session->flashdata('pesan');

                            if ( !empty($info)) {
                                echo $info;
                            }

                            //$this->session->flashdata('info');
                            ?>
                                
                                <form action="<?= base_url('profil/edit');?>" id="form-admin"
                                    class="form-horizontal group-border-dashed" enctype="multipart/form-data"
                                    method="POST">


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">ID JSS & NIK</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="pass2" value="<?= $id_jss ?>" class="form-control"
                                                disabled required placeholder="ID JSS" />
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?= $nik ?>" class="form-control" disabled
                                                placeholder="NIK" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nama" class="form-control text-capitalize" value="<?= $nama ?>"
                                                placeholder="Itmam Diyar Al Salam" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">E-Mail</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" class="form-control" value="<?= $email ?>"
                                                parsley-type="email" placeholder="itmamdiyar28@gmail.com" />
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Telpon</label>
                                        <div class="col-sm-8">
                                            <input data-parsley-type="number" type="text" name="notel"
                                                class="form-control" value="<?= $no_telpon ?>"
                                                placeholder="083920898320" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input data-parsley-type="alphanum" type="password" name="password"
                                                class="form-control" placeholder="**************" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Masjid</label>
                                        <div class="col-sm-8">
                                            <input data-parsley-type="digits" type="text" name="id_masjid"
                                                class="form-control" value="<?= $masjid ?>"
                                                placeholder="Masjid Al Salam" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <textarea name="alamat" class="form-control autogrow"
                                                rows="5"><?= $alamat;?> </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Foto Profil</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="gambar_profil" id="gambar_profil" class="filestyle"
                                                data-buttontext="Pilih Foto" data-placeholder="Upload Foto"
                                                data-buttonname="btn-custom btn-info"
                                                onchange="previewImage();" />
                                        </div>
                                        <div class="col-sm-2">
                                            <img src="<?= base_url('uploads/user/'.$gambar_profil) ?>" alt="preview" id="preview" class="img-thumbnail">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-9 m-t-15">
                                            <button type="submit" class="btn btn-custom btn-info">
                                                Simpan
                                            </button>
                                            <button type="reset" class="btn btn-custom btn-default m-l-5">
                                                Batal
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>


                        </div> <!-- end row -->

                    </div>

                </div>

            </div>
        </div>
        <footer class="footer text-right"><b>
                © 2019. NBUA.Soft reserved.
            </b></footer>
    </div>

    <script src="<?= base_url(); ?>assets/js/jquery.core.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.app.js"></script>

    <script src="<?= base_url(); ?>assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript">
    </script>

    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.colVis.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
    <!--FooTable-->
    <script src="<?= base_url(); ?>assets/plugins/footable/js/footable.all.min.js"></script>

    <script src="<?= base_url(); ?>assets/pages/datatables.init.js"></script>

    <script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>




    <script type="text/javascript">
        function previewImage() {
            document.getElementById("preview").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambar_profil").files[0]);

            oFReader.onload = function (oFREvent) {
            document.getElementById("preview").src = oFREvent.target.result;
            };
        };
        
        
        var save_method; //for save method string
        var table;
        var base_url = '<?= base_url(); ?>';

        function add_kegiatan() {
            save_method = 'add';
            $('#form-group')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string
            $('#modal_kegiatan').modal('show'); // show bootstrap modal
            $('.modal-title').text('Tambah Kelompok Penyedia Boga'); // Set Title to Bootstrap modal title

            $('#photo-preview').hide(); // hide photo preview modal

            $('#label-photo').text('Upload Photo'); // label photo upload
        }

        $(document).ready(function () {

            $('#datepicker-autoclose').datepicker({

                format: "yyyy-mm-dd",
                autoclose: true,
                todayHighlight: true
            });

            table = $('#data').DataTable({
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.

                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?= site_url('kegiatan/ajax_list') ?>",
                    "type": "POST"
                },

                //"sDom " : '<"top"i>rt<"bottom"flp>',
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bInfo": true,
                "bAutoWidth": true,

                buttons: [
                    'copy', 'excel', 'pdf'
                ],



                //Set column definition initialisation properties.
                "columnDefs": [{
                        "targets": [-1], //last column
                        "orderable": true, //set not orderable
                    },
                    {
                        "targets": [-3], //last column
                        "orderable": true, //set not orderable
                    },

                    {
                        "targets": [-8], //last column
                        "orderable": true, //set not orderable
                    },
                ]
            });
            table.buttons().container()
                .appendTo($('.col-sm-6:eq(0)', table.table().container()));

        });

        function input_kegiatan() {
            save_method = 'add';
            $('#form-kegiatan')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string

            $('.modal-title').text('Form Input Kegiatan');
            $('#modal_kegiatan').modal('show'); // show bootstrap modal 
        }

        function edit_kegiatan(id_kegiatan) {

            save_method = 'update';
            $('#form-kegiatan')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string


            //Ajax Load data from ajax
            $.ajax({
                url: "<?= site_url('kegiatan/ajax_kegiatan') ?>/" + id_kegiatan,
                type: "GET",
                dataType: "JSON",
                success: function (data) {

                    $('[name="id_kegiatan"]').val(data.id_kegiatan);
                    $('[name="jenis_kegiatan"]').val(data.jenis_kegiatan);
                    $('[name="tanggal"]').val(data.tanggal);
                    $('[name="jam"]').val(data.jam);
                    $('[name="keterangan"]').val(data.keterangan);

                    $('#modal_kegiatan').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Ubah Data Kegiatan ' + data
                        .jenis_kegiatan); // Set title to Bootstrap modal title

                    $('#upload').show(); // show photo preview modal
                    $('#upload div').html('<img src="' + base_url + 'uploads/kegiatan/' + data.gambar +
                        '" class="img-responsive thumb-lg">');


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }

        function save() {
            $('#btnSave').text('Menyimpan.....'); //change button text
            $('#btnSave').attr('disabled', true); //set button disable 
            var url;

            if (save_method == 'add') {
                url = "<?= site_url('kegiatan/ajax_add_kegiatan') ?>";
            } else {
                url = "<?= site_url('kegiatan/ajax_update_kegiatan') ?>";
            }

            // ajax adding data to database

            var formData = new FormData($('#form-kegiatan')[0]);
            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (data) {

                    if (data.status) //if success close modal and reload ajax table
                    {
                        $('#modal_kegiatan').modal('hide');
                        reload_table();
                    } else {
                        for (var i = 0; i < data.inputerror.length; i++) {
                            $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass(
                                'has-error'
                            ); //select parent twice to select div form-group class and add has-error class
                            $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[
                                i]); //select span help-block class set text error string
                        }
                    }
                    $('#btnSave').text('Simpan Kegiatan'); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable 


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Terjadi kesalahan saat menyimpan data');
                    $('#btnSave').text('Coba Simpan Lagi Kegiatan'); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable 

                }
            });
        }

        function delete_kegiatan(id_kegiatan, jenis_kegiatan) {
            var url;
            url = "<?= site_url('kegiatan/ajax_delete_kegiatan') ?>";
            swal({
                    title: "Are you sure?",
                    text: "Delete Kegiatan : " + jenis_kegiatan,
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: true
                },
                function () {
                    swal("Deleted!", "Data Kegiatan has been deleted.", "success");
                    reload_table();
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            'id_kegiatan': id_kegiatan
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert('Terjadi kesalahan saat menghapus data');
                            $('#btnSave').text('Hapus Data Kegiatan'); //change button text
                            $('#btnSave').attr('disabled', false); //set button enable 

                        }

                    });
                    reload_table();
                });
            reload_table();
        }

        function reload_table() {
            table.ajax.reload(null, false);
        }
    </script>


    <!-- JS dan Lain2 -->
    <script src="<?= base_url(); ?>assets/plugins/notifyjs/js/notify.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/notifications/notify-metro.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/custombox/js/custombox.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/custombox/js/legacy.min.js"></script>

    <script src="<?= base_url(); ?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/switchery/js/switchery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/multiselect/js/jquery.multi-select.js">
    </script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js">
    </script>
    <script src="<?= base_url(); ?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"
        type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"
        type="text/javascript">
    </script>



    <script src="<?= base_url(); ?>assets/plugins/moment/moment.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url(); ?>assets/pages/jquery.form-pickers.init.js"></script>

    <script src="<?= base_url(); ?>assets/plugins/smoothproducts/js/smoothproducts.min.js"></script>
    <script type="text/javascript">
        // wait for images to load
        $(window).load(function () {
            $('.sp-wrap').smoothproducts();
        });
    </script>