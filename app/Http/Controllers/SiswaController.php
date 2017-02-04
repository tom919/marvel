<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Siswa;

class SiswaController extends Controller
{
  public function index()
  {
    $halaman="siswa";
    $siswa_list=Siswa::all()->sortBy('nama_siswa');
    $jumlah_siswa=$siswa_list->count();
    return view('siswa.index', compact('halaman','siswa_list','jumlah_siswa'));
  }
  public function create()
  {
    return view('siswa.create');
  }
  public function store(Request $request)
  {
    $siswa=$request->all();
    return $siswa;
  }
}
