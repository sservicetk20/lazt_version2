<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lazt.us - <?php echo $__env->yieldContent('title'); ?> </title>

    <!-- Fonts -->
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/plugins/sweetalert-master/dist/sweetalert.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(url('css/login.css')); ?>" rel="stylesheet">

    <style>
      .warning{
        background-color: green!important;
      }
        body {
            font-family: 'Open Sans';
            background-color:#00bcd4;
        }
        .fa-btn {
            margin-right: 6px;
        }
        .center {
          margin: 0 auto;
        }
        .form {
          max-width: 500px;
        }
        nav {
          font-weight: 150;
          padding: 0 10px 10px 10px;
          color: #fff
        }
    </style>
</head>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- JavaScripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
   

    <script>
      $(document).ready(function () {
        $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();
        $('select').material_select();
        $('.tap-target').tapTarget('open');
        $('.tap-target').tapTarget('close');
      });
    </script>
    <script src="<?php echo e(url('/plugins/sweetalert-master/dist/sweetalert.min.js')); ?>"></script>
    <?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>