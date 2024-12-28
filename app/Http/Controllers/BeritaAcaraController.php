<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BeritaAcaraController extends Controller
{
    public function index()
    {
        $data = BeritaAcara::paginate(10);
        return view('admin.beritaacara.index', compact('data'));
    }
    public function tambah()
    {
        return view('admin.beritaacara.create');
    }
    public function simpan(Request $req)
    {
        BeritaAcara::create($req->all());
        Session::flash('success', 'berhasil di simpan');

        return redirect('/admin/data/surattugas');
    }
    public function edit($id)
    {
        $data = BeritaAcara::find($id);
        return view('admin.beritaacara.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = BeritaAcara::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/admin/data/beritaacara');
    }
    public function hapus($id)
    {
        $data = BeritaAcara::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return back();
    }
}
