@extends('layouts.app')   
@push('css')   
   
@endpush   
@section('content')   
<div class="row column_title">   
    <div class="col-md-12">   
       <div class="page_title">   
          <h2>Edit Data Surat Masuk</h2>   
       </div>   
    </div>   
  </div>   
  <div class="white_shd full margin_bottom_30">   
    <div class="padding_infor_info">   
        <form method="post" action="/admin/data/suratmasuk/edit/{{$data->id}}">   
            @csrf   
        <fieldset>   
            <div class="field">   
               <label class="label_field">Tanggal Masuk</label>   
               <input type="date" class="form-control" name="tgl_masuk" value="{{$data->tgl_masuk}}">   
            </div> 
 
            <div class="field">   
                <label class="label_field">Alamat Pengirim</label>   
                <input type="text" class="form-control" name="alamat_pengirim" value="{{$data->alamat_pengirim}}">   
             </div>   
             
             <div class="field">   
                <label class="label_field">Tanggal Surat</label>   
                <input type="date" class="form-control" name="tgl_surat" value="{{$data->tgl_surat}}">   
             </div>  
 
             <div class="field">   
                <label class="label_field">Nomor Surat</label>   
                <input type="text" class="form-control" name="no_surat" value="{{$data->no_surat}}">   
             </div> 
 
             <div class="field">   
                <label class="label_field">Perihal</label>   
                <input type="text" class="form-control" name="perihal" value="{{$data->perihal}}">   
             </div>  
 
             <div class="field">   
                <label class="label_field">Keterangan</label>   
                <input type="text" class="form-control" name="keterangan" value="{{$data->keterangan}}">   
             </div> 
 
             <div class="field">   
                <label class="label_field">Kode Arsip</label>   
                <input type="text" class="form-control" name="kode_arsip" value="{{$data->kode_arsip}}">   
             </div>  
              
             <div class="field">   
                <label class="label_field">File</label>   
                <input type="file" class="form-control" name="file">   
             </div>  
 
             <div class="field">   
                <label class="label_field">Tanggal Disposisi</label>   
                <input type="Date" class="form-control" name="tgl_disposisi" value="{{$data->tgl_disposisi}}">   
             </div>  
 
            <br/>   
           <div class="field margin_0">   
               
              <button class="main_bt"><i class="fa fa-save"></i> Update</button>   
           </div>   
        </fieldset>   
        </form>   
    </div>   
  </div>   
     
@endsection   
@push('js')   
   
@endpush