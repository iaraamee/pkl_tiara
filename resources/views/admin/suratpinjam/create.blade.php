@extends('layouts.app')  
@push('css')  
  
@endpush  
@section('content')  
<div class="row column_title">  
    <div class="col-md-12">  
       <div class="page_title">  
          <h2>Tambah Data</h2>  
       </div>  
    </div>  
  </div>  
  <div class="white_shd full margin_bottom_30">  
    <div class="padding_infor_info">  
        <form method="post" action="/admin/data/suratpinjam/create">  
            @csrf  
        <fieldset>  
            <div class="field">  
               <label class="label_field">Nama Peminjam</label>  
               <input type="text" class="form-control" name="nama_peminjam">  
            </div>

            <div class="field">  
                <label class="label_field">Instansi</label>  
                <input type="text" class="form-control" name="instansi">  
             </div>  
            
             <div class="field">  
                <label class="label_field">Nomor Telepon</label>  
                <input type="text" class="form-control" name="no_telp">  
             </div> 

             <div class="field">  
                <label class="label_field">Tanggal Pinjam</label>  
                <input type="date" class="form-control" name="tgl_pinjam">  
             </div>

             <div class="field">  
                <label class="label_field">Tanggal Kembali</label>  
                <input type="date" class="form-control" name="tgl_kembali">  
             </div> 

             <div class="field">  
                <label class="label_field">Nama Barang</label>  
                <input type="text" class="form-control" name="nama_barang">  
             </div>
             
             <div class="field">  
                <label class="label_field">File</label>  
                <input type="file" class="form-control" name="file">  
             </div> 
            <br/>  
           <div class="field margin_0">  
              
              <button class="main_bt"><i class="fa fa-save"></i> Simpan</button>  
           </div>  
        </fieldset>  
        </form>  
    </div>  
  </div>  
    
@endsection  
@push('js')  
  
@endpush