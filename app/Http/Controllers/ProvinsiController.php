<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProvinsiController extends Controller
{
  // layout dengan menggunakan blade
  public $layout  = 'template';
  public $title   = 'Marvell App';

  public function index() {
    /* $this->layout->title = $this->title;*/
      /*
      * menggunakan view yang ada
      * pada direktori views/provinsi/index
      */
      $view = View::make('provinsi.index');

      /*
      * query ini digunakan untuk menggunakan
      * pagination pada Eloquent
      */
      $view->provinsis = Provinsi::paginate(20);
      $view->count = Provinsi::all()->count();

      // render semua konten view kedalam layout
      $this->layout->content = $view;
  }

  public function create() {
      $this->layout->title = $this->title;
      /* menggunakan view yang ada
       * pada direktori views/provinsi/form
       */
      $view = View::make('provinsi.form');

      // form action untuk memproses form ke method yang lain
      $view->form_action = url('provinsi/store');

      $view->form_title = 'add';
      $view->action_title = 'Tambah Provinsi';

      // render semua konten view ke dalam layout
      $this->layout->content = $view;
  }

  public function store() {
      /*  memanggil class model Provinsi
       *  dan menyimpan data yang dikirim dari form
       */
      $provinsi = new Provinsi;
      $provinsi->nama_provinsi = Input::get('nama_provinsi');
      $provinsi->save();

      // redirect ke route yang lain
      return Redirect::to('provinsi')->with('message', 'PROVINSI BERHASIL DISIMPAN');
  }

  public function edit($id) {
      $this->layout->title = $this->title;
      /* menggunakan view yang ada
       * pada direktori views/provinsi/form
       */
      $view = View::make('provinsi.form');

      // form action untuk memproses form ke method yang lain
      $view->form_action = url('provinsi/update/'.$id.'');

      $view->action_title = 'Ubah Provinsi';
      $view->form_title = 'edit';

      // query untuk mengambil data dari parameter
      $view->provinsi = Provinsi::find($id);
      $this->layout->content = $view;
  }

  public function update($id) {
      /*  memanggil class model Provinsi
       *  lalu melakukan query untuk mengambil data dari DB
       *  dan memperbaharuinya dengan data yang dikirim dari form
       */
      $provinsi  = Provinsi::find($id);
      $provinsi->nama_provinsi = Input::get('nama_provinsi');
      $provinsi->save();

      // redirect ke route yang lain
      return Redirect::to('provinsi')->with('message', 'PROVINSI BERHASIL DIUBAH');
  }

  public function destroy($id) {
      /*  memanggil class model Provinsi
       *  lalu melakukan query untuk mengambil data dari DB
       *  dan menghapus datanya
       */
      $provinsi = Provinsi::find($id);
      $provinsi->delete();

      // redirect ke route yang lain
      return Redirect::to('provinsi')->with('message', 'PROVINSI BERHASIL DIHAPUS');
  }

}
