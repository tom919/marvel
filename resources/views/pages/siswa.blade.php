@extends('template')
@section('main')
<div id="siswa">
<h3>Data Siswa</h3>
<br><a href="{{ url('siswa/create')}}"><button class="btn btn-success">Input Data</button></a>

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
@stop
