<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?=base_url();?>assets/images/nbuaicon.png">

        <title>NBUA Soft</title>
        
        
        <link rel="stylesheet" href="<?=base_url();?>assets/plugins/morris/morris.css">
        <link href="<?=base_url();?>assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
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


    <body class="fixed-left">
    	<script>
            var resizefunc = [];
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
        <!-- jQuery  -->
        <script src="<?=base_url();?>assets/plugins/moment/moment.js"></script>


       

         <script src="<?=base_url();?>assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>

        <!-- Todojs  -->
        <script src="<?=base_url();?>assets/pages/jquery.todo.js"></script>

        <!-- chatjs  -->
        <script src="<?=base_url();?>assets/pages/jquery.chat.js"></script>

        <script src="<?=base_url();?>assets/plugins/peity/jquery.peity.min.js"></script>
		
		<script src="<?=base_url();?>assets/js/jquery.core.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.app.js"></script>

		<script src="<?=base_url();?>assets/pages/jquery.dashboard_2.js"></script>
		        <!-- Modal-Effect -->
        <script src="<?=base_url();?>assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/custombox/js/legacy.min.js"></script>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        
                        <!--Image Logo here -->
                         <a href="<?= base_url('awal_guest'); ?>" class="logo"><i class="icon-c-logo">
                        <img src="<?=base_url();?>assets/images/nbuaicon.png" width="45px" height="45px" >
                    </i><span>
                        <img src="<?=base_url();?>assets/images/nbuafont.png" width="150px" height="40px">
                    </span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                         <ul class="nav navbar-nav navbar-right pull-right">
                                
                                
                                
                               <li class="dropdown top-menu-item-xs">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="true">
                                    <span class="" >Guest</span>
                                    <img src="<?= base_url('uploads/user/default.png');?>" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">

                                    <li><a href="#"><i class="ti-user m-r-10 text-custom"></i>
                                            Profile</a></li>
                                            <li class="divider"></li>
                                    <li><a href="http://localhost/CI/login/logout"><i
                                                class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?=$this->load->view('templates/front_menu_guest'); ?>
            <!-- Left Sidebar End --> 


            <?php echo $contents;?>


        </div>
        <!-- END wrapper -->


    
        
        
        
    </body>
</html>