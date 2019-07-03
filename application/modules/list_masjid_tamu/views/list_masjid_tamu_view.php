<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<link href="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet"
    type="text/css" />
<link href="<?=base_url();?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />


<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

<!--TimePicker-->
<link href="<?=base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?=base_url();?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="<?=base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?=base_url();?>assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
<link href="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<script src="assets/js/modernizr.min.js"></script>

<link src="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link src="<?=base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?=base_url();?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
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

                <div class="col-sm-12">

                    <h1><b>Daftar List Masjid </b></h1>

                    <div>   
                    <button class="btn btn-custom btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload Data</button>
                    </div>
                    <br><br>
                    
                    <h2 class="text text-warning" > List Masjid Aktif</h2>
                    <div class="card-box table-responsive">

                        <table id="data" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>Id Masjid</th>
                                    <th>Nama Masjid</th>
                                    <th>Alamat</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Kategori Masjid</th>
                                    <th>Gambar</th>

                                    
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>

                    </div>



                </div>

            </div>

        </div>
        
    </div>

    <footer class="footer text-right"><b>
                    © 2019. NBUA Soft reserved.
                    </b></footer>

</div>

<script src="<?=base_url();?>assets/js/jquery.core.js"></script>
<script src="<?=base_url();?>assets/js/jquery.app.js"></script>

<script src="<?=base_url();?>assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript">
</script>

<script src="<?=base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/jszip.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
<!--FooTable-->
<script src="<?=base_url();?>assets/plugins/footable/js/footable.all.min.js"></script>

<script src="<?=base_url();?>assets/pages/datatables.init.js"></script>

<script src="<?=base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>




<script type="text/javascript">
    var save_method; //for save method string
    var table;
    var base_url = '<?=base_url();?>';

    function add_kegiatan()
    {
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
            
            format:"yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });

        table = $('#data').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?=site_url('list_masjid/ajax_list')?>",
                "type": "POST"
            },
            
            //"sDom " : '<"top"i>rt<"bottom"flp>',
            "bPaginate": true,
            "bLengthChange": true,
            "aLengthMenu":[5,10,25,50],
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
                    "targets": [-6], //last column
                    "orderable": true, //set not orderable
                },
            ]
        });
        table.buttons().container()
            .appendTo($('.col-sm-6:eq(0)', table.table().container()));

    });

    $(document).ready(function () {
       
       $('#datepicker-autoclose').datepicker({
           
           format:"yyyy-mm-dd",
           autoclose: true,
           todayHighlight: true
       });

       table = $('#data2').DataTable({
           "processing": true, //Feature control the processing indicator.
           "serverSide": true, //Feature control DataTables' server-side processing mode.
           "order": [], //Initial no order.

           // Load data for the table's content from an Ajax source
           "ajax": {
               "url": "<?=site_url('list_masjid/ajax_list2')?>",
               "type": "POST"
           },
           
           //"sDom " : '<"top"i>rt<"bottom"flp>',
           "bPaginate": true,
           "bLengthChange": true,
           "aLengthMenu":[5,10,25,50],
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
                   "targets": [-6], //last column
                   "orderable": true, //set not orderable
               },
           ]
       });
       table.buttons().container()
           .appendTo($('.col-sm-6:eq(0)', table.table().container()));

   });

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function input_kegiatan(){
        save_method = 'add';
        $('#form-kegiatan')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        $('.modal-title').text('Form Input Kegiatan');
        $('#modal_kegiatan').modal('show'); // show bootstrap modal 
    }

    function edit_masjid(id_masjid){

        save_method = 'update';
        $('#form-kegiatan')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string


        //Ajax Load data from ajax
        $.ajax({
            url : "<?=site_url('kegiatan/ajax_kegiatan')?>/" + id_kegiatan,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="id_kegiatan"]').val(data.id_kegiatan);
                $('[name="jenis_kegiatan"]').val(data.jenis_kegiatan);
                $('[name="tanggal"]').val(data.tanggal);
                $('[name="jam"]').val(data.jam);
                $('[name="keterangan"]').val(data.keterangan);
                
                $('#modal_kegiatan').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Ubah Data Kegiatan '+ data.jenis_kegiatan); // Set title to Bootstrap modal title

                $('#upload').show(); // show photo preview modal
                $('#upload div').html('<img src="'+base_url+'uploads/kegiatan/'+data.gambar+'" class="img-responsive thumb-lg">');

                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save()
    {
        $('#btnSave').text('Menyimpan.....'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        var url;
     
        if(save_method == 'add'){
            url = "<?=site_url('kegiatan/ajax_add_kegiatan')?>";
        }else{
            url = "<?=site_url('kegiatan/ajax_update_kegiatan')?>";
        }
     
        // ajax adding data to database
     
        var formData = new FormData($('#form-kegiatan')[0]);
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
                    $('#modal_kegiatan').modal('hide');
                    reload_table();
                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++) 
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('Simpan Kegiatan'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
     
     
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Terjadi kesalahan saat menyimpan data');
                $('#btnSave').text('Coba Simpan Lagi Kegiatan'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
     
            }
        });
    }

    function delete_masjid(id_masjid, nama_masjid) {
        var url;
        url = "<?=site_url('list_masjid/ajax_delete_masjid')?>";
        swal({
                title: "Apakah anda yakin ?",
                text: "Non-Aktifkan Status Masjid : " + nama_masjid,
                type: "warning",
                showCancelButton: true,
                cancelButtonText: "Batal",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ya, Non-Aktifkan itu!",
                closeOnConfirm: false
            },
            function () {
                swal("Sukses!", "Data Masjid berhasil dinon-aktifkan.", "success");
                reload_table();
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        'id_masjid': id_masjid
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

    function ubah_masjid(id_masjid, nama_masjid) {
        var url;
        url = "<?=site_url('list_masjid/ajax_update_status')?>";
        swal({
                title: "Apakah anda yakin ?",
                text: "Aktifkan Status Masjid : " + nama_masjid,
                type: "info",
                showCancelButton: true,
                cancelButtonText: "Batal",
                confirmButtonClass: "btn-info",
                confirmButtonText: "Ya , Ubah itu!",
                closeOnConfirm: false
            },
            function () {
                swal("Sukses!", "Status Masjid berhasil dirubah.", "success");
                reload_table();
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        'id_masjid': id_masjid
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Terjadi kesalahan saat merubah status');
                        $('#btnSave').text('Ubah Status'); //change button text
                        $('#btnSave').attr('disabled', false); //set button enable 

                    }
                    
                });
                reload_table();
            });
            reload_table();
    }

    
</script>

<div id="modal_kegiatan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_kegiatanLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Kegiatan Baru</h4>
            </div>

            <div class="modal-body">
            <form action="" id="form-kegiatan">
            <input type="hidden" name="id_kegiatan">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Jenis Kegiatan</label>
                            <input type="text" name="jenis_kegiatan" required="" class="form-control" id="field-3" placeholder="Jenis Kegiatan" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="field-1" class="control-label">Tanggal Pelaksanaan</label>
                        <div class="input-group">
                            <input type="datepicker-autoclose" name="tanggal" required="" class="form-control" placeholder="mm/dd/yyyy"
                                id="datepicker-autoclose">
                            <span class="input-group-addon bg-custom b-0 text-white"><i
                                    class="icon-calender"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="field-2" class="control-label">Waktu Pelaksanaan</label>
                        <div class="input-group m-b-15">
                        <div class="bootstrap-timepicker">
                            <input id="timepicker2" name="jam" type="text" required="" class="form-control" placeholder="00:00"> 
                        </div>
                            <span class="input-group-addon bg-custom b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Keterangan Kegiatan</label>
                            <textarea class="form-control autogrow" id="field-7" name="keterangan" required=""
                                placeholder="Keterangan Kegiatan (Misal : Pengisi Kegiatan, dll)"
                                style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group" id="upload">
                            <label class="control-label col-md-3">Gambar / Pamflet</label>
                            <div class="col-md-9">
                                (No photo)
                                <span class="help-block"></span>
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">                          
                            
                            <input type="file" class="filestyle" name="gambar" data-buttontext="Pilih File" data-placeholder="Upload Gambar" data-buttonname="btn-info">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <a onclick="$.Notification.notify('success','top left', 'Sukses', 'Data Berhasil Dimasukkan.')"><button type="button" id="btnSave" onclick="save()" class="btn btn-info waves-effect waves-light">Simpan Kegiatan</button></a>
            </div>
        </div>
        </form>
    </div>

    <!-- JS dan Lain2 -->
    <script src="<?=base_url();?>assets/plugins/notifyjs/js/notify.js"></script>
    <script src="<?=base_url();?>assets/plugins/notifications/notify-metro.js"></script>
    <script src="<?=base_url();?>assets/plugins/custombox/js/custombox.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/custombox/js/legacy.min.js"></script>

    <script src="<?=base_url();?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/switchery/js/switchery.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js">
    </script>
    <script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript">
    </script>



    <script src="<?=base_url();?>assets/plugins/moment/moment.js"></script>
    <script src="<?=base_url();?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?=base_url();?>assets/pages/jquery.form-pickers.init.js"></script>
    