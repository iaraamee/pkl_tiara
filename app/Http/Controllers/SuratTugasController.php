<?php

namespace App\Http\Controllers;

use App\Models\SuratPinjam;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuratTugasController extends Controller
{
    public function index()
    {
        $data = SuratTugas::paginate(10);
        return view('admin.surattugas.index', compact('data'));
    }
    public function tambah()
    {
        return view('admin.surattugas.create');
    }
    public function simpan(Request $req)
    {
        SuratTugas::create($req->all());
        Session::flash('success', 'berhasil di simpan');

        return redirect('/admin/data/surattugas');
    }
    public function edit($id)
    {
        $data = SuratTugas::find($id);
        return view('admin.surattugas.edit',compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = SuratTugas::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/admin/data/surattugas');
    }
    public function hapus($id)
    {
        $data = SuratPinjam::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return back();
    }
}
