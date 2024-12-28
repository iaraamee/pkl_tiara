<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $data = SuratKeluar::paginate(10);
        return view('admin.suratkeluar.index',compact('data'));
    }
    public function tambah()
    {
    return view('admin.suratkeluar.create');
    }
    public function simpan(Request $req)
    {
        SuratKeluar::create($req->all());
        Session::flash('success', 'berhasil di simpan');
        return redirect('/admin/data/suratkeluar');
    }
    public function edit($id)
    {
        $data = SuratKeluar::find($id);
        return view('admin.suratkeluar.edit',compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = SuratKeluar::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/admin/data/suratkeluar');
    }
    public function hapus($id)
    {
        $data = SuratKeluar::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return back();
    }
}
