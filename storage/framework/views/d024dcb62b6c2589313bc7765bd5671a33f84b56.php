<?php $__env->startSection('main'); ?>
<div id="homepage" style="text-align: center;">
  <h1>Marvel System</h1>
  <p>Selamat Belajar</p>
  <a href="siswa"><button class="btn btn-success">Continue</button></a>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<div id="footer" style="text-align: center;">
<p><i>&copy; 2017 zeuswork</i></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>