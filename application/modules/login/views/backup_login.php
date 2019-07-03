<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">


    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Halaman Masuk</title>


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

    <script src="<?= base_url(); ?>assets/js/modernizr.min.js"></script>

</head>

<body>

    <div class="account-pages"></div>
    <div class="clearfix"></div>

    <div class="wrapper-page mx-auto">
        <div class="card-box">
            <div class="panel-heading">

                <!--<h3 class="text-center"> Sign In to</h3> -->
            </div>

            <center>
                <div class=logo>
                    <h1>Masuk</h1>
                </div>
            </center>

            <div class="panel-body">
                <form id="form_login" class="form-horizontal m-t-20" action="<?php echo site_url('login/auth') ?>" method="POST">

                    <div class="form-group text-center m-t-40">
                        <?php
						$info = $this->session->flashdata('pesan');
						if (!empty($info)) {
							echo $info;
						}
						//$this->session->flashdata('info');
						?>

                    </div>


                    <div class="form-group ">
                        <div class="input-group">
                            <span class="input-group-addon bg-info"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" name="email" id="email" type="email" onkeypress="ValidateEmail()" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon bg-info"><i class="fa fa-key"></i></span>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                        </div>
                    </div>


                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">

                            <button id="btnSave" class="btn btn-info btn-custom btn-block text-uppercase waves-effect waves-light" type="submit">
                                Masuk
                            </button>
                        </div>
                    </div>


                    <div class="col-sm-12 text-center">
                        <h4><b>Atau</b></h4><br>
                    </div>


                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">

                            <button id="btnSave" class="btn btn-info btn-custom btn-block text-uppercase waves-effect waves-light" type="submit">
                                Masuk sebagai Tamu
                            </button>
                        </div>
                    </div>

                </form>
                <hr>
                <div class="form-group m-t-20 m-b-0 text-center">
                    <div class="col-sm-12">
                        <a href="<?= site_url('forgot') ?>" class="text-dark"><i class="fa fa-lock m-r-5"></i> Lupa
                            Password
                            ?</a>
                    </div>
                    <div class="cols-sm-12">
                        <a class="text-dark" href="<?= site_url('daftar') ?>">Tidak Mempunyai Akun? Daftar disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>


    <script>
        var resizefunc = [];

        function ValidateEmail() {
            var email = document.getElementById("txtEmail").value;
            var lblError = document.getElementById("lblError");
            lblError.innerHTML = "";
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (!expr.test(email)) {
                lblError.innerHTML = "Invalid email address.";
            }
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


    <script src="<?= base_url(); ?>assets/js/jquery.core.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.app.js"></script>

</body>

</html> 