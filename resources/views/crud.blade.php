@extends('template')
  @section('title')
		product
  @endsection
    @section('conten')
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Product</h3>
                <br> 
                  <a href="/crud/tambah" class="btn btn-primary">insert</a> 
              </div>
               <!-- /.card-header -->
               <div class="card-body">
               <table id="data-item" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="not_mapped_style" style="text-align:center">Id</th>                    
                    <th class="not_mapped_style" style="text-align:center">Nama</th>
                    <th class="not_mapped_style" style="text-align:center">Harga barang</th>
                    <th width="240px" class="not_mapped_style" style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody>
				@foreach($products as $p)
                <tr>
                  <td align="center"> {{$p->id}} </td>
                  <td align="center"> {{$p->namabarang}} </td>
                  <td align="center"> {{$p->hargabarang}} </td>
                  <td align="center"> 
				  <a href="/crud/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/crud/hapus/{{ $p->id }}">Hapus</a>
                    </td>
                  </tr>
                  	@endforeach
                  </tbody>
                </table>                   
                 </div>
              <!-- /.card-body -->
            </div>
     @endsection
            
  