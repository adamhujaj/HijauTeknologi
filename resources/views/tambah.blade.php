@extends('template')
  @section('title')
		product
  @endsection
  @section('conten')
    <title>insert</title>      
    <div class="container">
     <form method="post" action="/crud/store" enctype="multipart/form-data">
     {{ csrf_field() }}        
       <!-- left column -->
        <div class="col-sm-25">
          <!-- general form elements -->
           <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputId">Id</label>
                    <input type="number" class="form-control" name="id" placeholder="{{old('id')}}">
                  </div>                  
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" name="namabarang" placeholder="{{old('namabarang')}}">
                  </div>
                  <div class="form-group">
                    <label >Harga Barang</label>
                    <input type="number" class="form-control" name="hargabarang" placeholder="{{old('hargabarang')}}">
                  </div>          
              </div>
             </div>
           </div>
                <!-- /.card-body -->
             <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div>
        </form>
     </div>
@endsection









