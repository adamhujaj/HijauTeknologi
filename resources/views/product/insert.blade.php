@extends('admin.template')
  @section('title')
		product
  @endsection
  @section('conten')
    <title>insert</title>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
  @if(session()->has('massage'))
    <div class="alert alert-success">
        {{session()->get('massage')}}
    </div>
  @endif                         
    <div class="container">
     <form method="post" action="{{url('admin/product/insert-post')}}" enctype="multipart/form-data">
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
                    <label>kategori</label>
                    <select name= "category_id" class="form-control select2" style="width: 100%;">
                      <option selected="category">kategori</option>
                      @foreach($categories as $row)
                      <option value="{{$row->id}}">{{$row->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputId">Id</label>
                    <input type="text" class="form-control" name="id" placeholder="{{old('id')}}">
                  </div>                  
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="{{old('name')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="{{old('email')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="{{old('password')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCode">Code</label>
                    <input type="text" class="form-control" name="code" placeholder="{{old('code')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputVarian">Varian</label>
                    <input type="text" class="form-control" name="varian" placeholder="{{old('varian')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="{{old('description')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputStock">Stock</label>
                    <input type="text" class="form-control" name="stock" placeholder="{{old('stock')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile" placeholder="{{old('image')}}">Choose file</label>
                      </div>
                    </div>
                  </div>              
              </div>
             </div>
           </div>
                <!-- /.card-body -->
             <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div>
        </form>
     </div>
@endsection









