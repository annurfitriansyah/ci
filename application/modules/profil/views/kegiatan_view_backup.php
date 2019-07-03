<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <link href="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>


    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>

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
        .modalEdit{
            width: 100%;
        }
    </style>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
        		<div class="row">
                    <div class="col-sm-12">
                    	<h1><b>Data Kegiatan</b></h1>
                    	<div>
                    		<button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Tambah Kegiatan </button>
                    	</div>
                    	<br><br>
                        <div class="card-box table-responsive">

                            <table id="datatable-buttons"
                                   class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                   width="100%" >
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                                </thead>


                                <tbody id="show_data">
                                
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        
        <footer class="footer">
            © 2019. All rights reserved.
        </footer>

    </div>

    <script src="<?=base_url();?>assets/js/jquery.core.js"></script>
	<script src="<?=base_url();?>assets/js/jquery.app.js"></script>

	<script src="<?=base_url();?>assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
	<script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

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
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "<?=base_url();?>assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

    </script>

    

    <script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        $('#datatable-buttons').dataTable();
          
        //fungsi tampil barang
        function tampil_data_barang(){
            var base_url = '<?=base_url();?>';
            $.ajax({
                type  : 'ajax',
                url   : "<?=base_url('kegiatan/tampil_kegiatan')?>",
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                   
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+no++ +'</td>'+
                                '<td>'+data[i].jenis_kegiatan+'</td>'+
                                '<td>'+data[i].tanggal+'</td>'+
                                '<td>'+data[i].waktu+'</td>'+
                                '<td>'+data[i].keterangan+'</td>'+
                                '<td>'+data[i].gambar+'</td>'+
                                '<td><button>'+ "Hapus" +'</button></td>'+
                                '</tr>';
                    }

                    $('#show_data').html(html);
                }
 
            });
        }
 
    });
 
</script>

	
            	<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header"> 
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                    <h4 class="modal-title">Kegiatan Baru</h4> 
                            </div> 
                            <div class="modal-body">
                                <div class="row"> 
                                    <div class="col-md-12"> 
                                        <div class="form-group"> 
                                            <label for="field-3" class="control-label">Jenis Kegiatan</label> 
                                                <input type="text" class="form-control" id="field-3" placeholder="Jenis Kegiatan"> 
                                        </div> 
                                    </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-6"> 
                                                        	<label for="field-1" class="control-label">Tanggal Pelaksanaan</label>
                                                            <div class="input-group"> 
                                                                 
                                                                <input type="datepicker-autoclose" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
																<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                                            </div> 
                                                        </div> 
                                                        <div class="col-md-6"> 
                                                        	<label for="field-2" class="control-label">Waktu Pelaksanaan</label> 
                                                            <div class="input-group m-b-15 ">                                                 
																	<input id="timepicker2" type="text" class="form-control">
																	<span class="input-group-addon bg-custom b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
																
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Keterangan Kegiatan</label> 
                                                                <textarea class="form-control autogrow" id="field-7" placeholder="Keterangan Kegiatan (Misal : Pengisi Kegiatan, dll)" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group no-margin"> 
                                                                <label for="field-7" class="control-label">Gambar / Pamflet</label> 
                                                                <input type="file" class="filestyle" id="upload" name="gambar" data-placeholder="Upload Gambar" data-buttonname="btn-info">
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                </div> 
                                                <div class="modal-footer"> 
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                           

    	<script src="<?=base_url();?>assets/plugins/notifyjs/js/notify.js"></script>
    	<script src="<?=base_url();?>assets/plugins/notifications/notify-metro.js"></script>
    	<script src="<?=base_url();?>assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/custombox/js/legacy.min.js"></script>

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

		<script src="<?=base_url();?>assets/plugins/moment/moment.js"></script>
     	<script src="<?=base_url();?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="<?=base_url();?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="<?=base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="<?=base_url();?>assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
     	<script src="<?=base_url();?>assets/pages/jquery.form-pickers.init.js"></script>


