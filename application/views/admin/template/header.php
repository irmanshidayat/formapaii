<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php echo $irman;  ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="<?php echo base_url() ?>assets/assets_admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/assets_admin/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/assets_admin/css/style.css" rel="stylesheet" type="text/css">
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <!-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view('admin/template/left-sidebar'); ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">