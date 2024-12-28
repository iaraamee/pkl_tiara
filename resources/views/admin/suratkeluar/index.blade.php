@extends('layouts.app') 
@push('css') 
     
@endpush 
@section('content') 
 
<div class="row column_title"> 
  <div class="col-md-12"> 
     <div class="page_title"> 
        <h2>Data Surat Keluar</h2> 
     </div> 
  </div> 
</div> 
<div class="white_shd full margin_bottom_30"> 
  <div class="full graph_head"> 
     <div class="heading1 margin_0"> 
        
      <a href="/admin/data/suratkeluar/create" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> 
     </div> 
  </div> 
  <div class="table_section padding_infor_info"> 
     <div class="table-responsive-sm"> 
        <table class="table table-bordered"> 
           <thead> 
              <tr style="background-color: rgb(52, 52, 51); font-weight:bold;color:aliceblue"> 
                <th>No</th> 
                <th>Nomor Surat</th>
                <th>Alamat Penerima</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
                <th>Penanggung Jawab</th>
                <th>Aksi</th> 
              </tr> 
           </thead> 
           <tbody> 
             
            @foreach ($data as $key => $item) 
            <tr> 
              <td>{{1 + $key}}</td> 
              <td>{{$item->no_surat}}</td>
              <td>{{$item->alamat_penerima}}</td> 
              <td>{{$item->tgl_surat}}</td>
              <td>{{$item->perihal}}</td>
              <td>{{$item->penanggungjawab}}</td>
              <td> 
                <a href="/admin/data/suratkeluar/edit/{{$item->id}}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a> 
                <a href="/admin/data/suratkeluar/delete/{{$item->id}}" class="btn btn-flat btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a> 
              </td> 
            </tr> 
            @endforeach 
           </tbody> 
        </table> 
     </div> 
  </div> 
</div> 
 
@endsection 
@push('js') 
@endpush