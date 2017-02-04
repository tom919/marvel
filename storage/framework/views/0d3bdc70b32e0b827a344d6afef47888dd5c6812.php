<!DOCTYPE html>
<html>
<head>
  <title>Marvell App</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<link href="<?php echo e(asset('bs/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet">


  <script src="<?php echo e(asset('jquery311.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bs/js/bootstrap.min.js')); ?>"></script>


<script src="<?php echo e(asset('html5shiv.js')); ?>"></script>
<script src="<?php echo e(asset('respond.min.js')); ?>"></script>
</head>
<body>
  <div class="container">
  <?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldContent('main'); ?>

</div>
  <?php $__env->startSection('footer'); ?>
<div id="footer">
<p>&copy 2017. Zeuswork</p>
</div>
</body>
</html>
