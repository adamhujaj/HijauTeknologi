@extends('admin.template')
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
                  <a href="{{url('admin/product/insert')}}" class="btn btn-primary">insert</a> 
              </div>
               <!-- /.card-header -->
               <div class="card-body">
               <table id="data-item" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="not_mapped_style" style="text-align:center">Code</th>                    
                    <th class="not_mapped_style" style="text-align:center">Name</th>
                    <th class="not_mapped_style" style="text-align:center">keterangan</th>
                    <th class="not_mapped_style" style="text-align:center">Kategory</th>
                    <th class="not_mapped_style" style="text-align:center">Stock</th>
                    <th class="not_mapped_style" style="text-align:center" >Image</th>
                    <th width="240px" class="not_mapped_style" style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                <tr>
                  <td align="center"> {{$product->code}} </td>
                  <td align="center"> {{$product->name}} </td>
                  <td align="center"> {{$product->description}} </td>
                  <td align="center"> {{$product->category->nama}} </td>
                  <td align="center"> {{$product->stock}} </td>
                  <td align="center"> <img src ="{{asset('image/'.$product->image)}}" width="100px" ></img></td>
                  <td align="center"> 
                      <form action="{{url('admin/product/delete/'.$product->id)}}" method="post">
                        <a class="btn btn-primary btn-sm" href="{{url('admin/product/edit/'.$product->id)}}">Edit</a> 
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini')">Delete</button>
                      </form>
                    </td>
                  </tr>
                  	@endforeach
                  </tbody>
                </table>              
                  {{$products->links('pagination::bootstrap-4')}}      
                 </div>
              <!-- /.card-body -->
            </div>
     @endsection
            
  