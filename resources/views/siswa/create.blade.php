@extends('template')
@section('main')
  <div id="siswa">

    <div class="siswa-form">
      <h3>Input Siswa Baru</h3>
    <form action="{{url('siswa')}}" method="POST">
      <div class="form-group">
        <label for="nisn" class="control-label">NISN</label>
        <input name="nisn" id="nisn" type="text" class="form-control">
      </div>
    </form>
    <div class="form-group">
      <label for="nama_siswa" class="control-label">Nama Siswa</label>
      <input name="nama_siswa" id="nama_siswa" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
      <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control">
    </div>
    <div class="form-group">
      <label for="jenis_kelamin" class="control-label">Jenis Kelamin :</label>
      <div class="radio">
      <label><input name="jenis_kelamin" id="jenis_kelamin" type="radio" class="form-control" value="L">Laki-laki</label>
    </div>
    <div class="radio">
    <label><input name="jenis_kelamin" id="jenis_kelamin" type="radio" class="form-control" value="P">Perempuan</label>
  </div>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary form-control" value="Tambah Siswa">
    </div>
  </div>
  </div>
  @stop
