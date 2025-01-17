<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index() //menampilkan data 
    {
        $data = User::get();
        return view('admin.user.index', compact('data'));
    }
    public function tambah() //form tambah 
    {
        return view('admin.user.create');
    }
    public function simpan(Request $req)
    {
        $check = User::where('username', $req->username)->first();
        if ($req->password1 != $req->password2) {
            Session::flash('warning', 'password tidak sama');

            return back();
        }

        if ($check != null) {
            Session::flash('warning', 'username Sudah ada');
            $req->flash();
            return back();
        } else {
            DB::beginTransaction();

            try {
                $u = new User;
                $u->name = $req->name;
                $u->username = $req->username;
                $u->password = Hash::make($req->password1);
                $u->roles = $req->role;
                $u->save();

                DB::commit();

                Session::flash('success', 'berhasil di simpan');
                return redirect('/admin/data/user');
            } catch (\Exception $e) {

                DB::rollback();
                Session::flash('error', 'Gagal sistem');
                return back();
            }
        }
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.user.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = User::find($id)->update($req->all());
        return redirect('/admin/data/user');
    }
    public function hapus($id)
    {
        $data = User::find($id)->delete();
        return back();
    }
}
