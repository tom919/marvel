<?php $__env->startSection('main'); ?>
<div id="siswa">
<h3>Data Siswa</h3>
<br><a href="<?php echo e(url('siswa/create')); ?>"><button class="btn btn-success">Input Data</button></a>

<?php if(!empty($siswa)): ?>
  <ul>
    <?php foreach ($siswa as $anak):
      # code...
    ?>
    <li><?php echo $anak ?></li>
    <?php endforeach ?>
  </ul>
<?php else: ?>
<p>Tidak ada data siswa</p>
  <?php endif ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>