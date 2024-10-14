<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?= isset($title) ? $title : 'Molshop' ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>/assets/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>/assets/libs/fontawesome/css/all.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>/assets/css/app.css">
</head>

<body>

    <!-- Navbar -->
    <?php $this->load->view('layouts/_navbar'); ?>
    <!-- EndNavbar -->
    <!-- Content -->
    <?php $this->load->view($page); ?>
    <!-- End Content -->
    <script src="<?php echo base_url(''); ?>/assets/libs/jquery/jquery-3.7.1.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assets/libs/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assets/js/app.js"></script>
</body>

</html>