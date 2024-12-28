<?php

namespace App\Http\Controllers;

use App\Models\SuratPinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuratPinjamController extends Controller
{
    public function index()
    {
        $data = SuratPinjam::paginate(10);
        return view('admin.suratpinjam.index', compact('data'));
    }
    public function tambah()
    {
    return view('admin.suratpinjam.create');
    }
    public function simpan(Request $req)
    {
        SuratPinjam::create($req->all());
        Session::flash('success', 'berhasil di simpan');

        return redirect('/admin/data/suratpinjam');
    }
    public function edit($id)
    {
        $data = SuratPinjam::find($id);
        return view('admin.suratpinjam.edit',compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = SuratPinjam::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/admin/data/suratpinjam');
    }
    public function hapus($id)
    {
        $data = SuratPinjam::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return back();
    }
}
