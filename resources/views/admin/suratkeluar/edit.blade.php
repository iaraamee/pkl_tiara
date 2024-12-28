@extends('layouts.app')   
@push('css')   
   
@endpush   
@section('content')   
<div class="row column_title">   
    <div class="col-md-12">   
       <div class="page_title">   
          <h2>Edit Data Surat Keluar</h2>   
       </div>   
    </div>   
  </div>   
  <div class="white_shd full margin_bottom_30">   
    <div class="padding_infor_info">   
        <form method="post" action="/admin/data/suratkeluar/edit/{{$data->id}}">   
            @csrf   
        <fieldset>   
            <div class="field">   
               <label class="label_field">Nomor Surat</label>   
               <input type="text" class="form-control" name="no_surat" value="{{$data->no_surat}}">   
            </div> 
 
            <div class="field">   
                <label class="label_field">Alamat Penerima</label>   
                <input type="text" class="form-control" name="alamat_penerima" value="{{$data->alamat_penerima}}">   
             </div>   
             
             <div class="field">   
                <label class="label_field">Tanggal Surat</label>   
                <input type="date" class="form-control" name="tgl_surat" value="{{$data->tgl_surat}}">   
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
                <label class="label_field">Penanggung Jawab</label>   
                <input type="text" class="form-control" name="penanggungjawab" value="{{$data->penanggungjawab}}">   
             </div>  

             <div class="field">   
                <label class="label_field">File</label>   
                <input type="file" class="form-control" name="file">   
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