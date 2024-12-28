<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuratMasukController extends Controller
{
    public function index()
    {
        $data = SuratMasuk::paginate(10);
        return view('admin.suratmasuk.index', compact('data'));
    }
    public function tambah()
    {
    return view('admin.suratmasuk.create');
    }
    public function simpan(Request $req)
    {
        SuratMasuk::create($req->all());
        Session::flash('success', 'berhasil di simpan');
        return redirect('/admin/data/suratmasuk');
    }
    public function edit($id)
    {
        $data = SuratMasuk::find($id);
        return view('admin.suratmasuk.edit',compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = SuratMasuk::find($id)->update($req->all()); //coding apdate
        Session::flash('success', 'Berhasil Diupdate'); //memunculkan notif
        return redirect('/admin/data/suratmasuk'); //untuk kembali ke menu
    }
    public function hapus($id)
    {
        $data = SuratMasuk::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return back();
    }
}
