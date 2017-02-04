@extends('template')
@section('main')
<div id="siswa">
<h3>Data Siswa</h3>
<br><a href="{{ url('siswa/create')}}"><button class="btn btn-success">Input Data</button></a>

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
    <td>{{ $siswa->nisn}}</td><td>{{ $siswa->nama_siswa}}</td><td>{{$siswa->tanggal_lahir}}</td><td>{{ $siswa->jenis_kelamin}}</td>
    <?php endforeach ?>
  </tr>
</tbody>
  </table>
<?php else: ?>
<p>Tidak ada data siswa</p>
  <?php endif ?>

  

</div>
@stop
