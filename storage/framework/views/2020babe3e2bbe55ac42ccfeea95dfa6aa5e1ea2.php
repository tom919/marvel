<?php $__env->startSection('main'); ?>
<div id="siswa">
<h3>Data Siswa</h3>
<br><a href="<?php echo e(url('siswa/create')); ?>"><button class="btn btn-success">Input Data</button></a>

<?php if(!empty($siswa_list)): ?>
<table>
  <thead>
    <tr>
      <th>NISN</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>JK</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($siswa_list as $siswa):
      # code...
    ?>
    <tr>
    <td><?php echo e($siswa->nisn); ?></td><td><?php echo e($siswa->nama_siswa); ?></td><td><?php echo e($siswa->tanggal_lahir); ?></td><td><?php echo e($siswa->jenis_kelamin); ?></td>
    <?php endforeach ?>
  </tr>
</tbody>
  </table>
<?php else: ?>
<p>Tidak ada data siswa</p>
  <?php endif ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>