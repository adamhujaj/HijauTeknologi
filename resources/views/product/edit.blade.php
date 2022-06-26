@extends('admin.template')
  @section('title')
		product
  @endsection
@section('conten')
<div class="container">
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('message'))
  <div class="alert alert-success">
    {{ session()->get('message') }}
  </div>
@endif
<!-- general form elements -->
<div class="container">
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
              </div>
<form method="post" action="{{url('admin/product/edit/'.$product->id)}}">

  @csrf

    <div class="card-body">
      <div class="form-group">
            <select name="category_id">
              @foreach ( $categories as $row )
                <option value="{{$row->id}}">{{$row->nama}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Code</label><br>
            <input type="text" class="form-control"name="code" value="{{old('code',$product->code)}}">
        </div>
        <div class="form-group">
            <label>Name</label><br>
            <input type="text" class="form-control" name="name" value="{{old('name',$product->name)}}">
        </div>
        <div class="form-group">
            <label>Stock</label><br>
            <input type="text" class="form-control" name="stock" value="{{old('stock',$product->stock)}}">
        </div>
        <div class="form-group">
            <label>Varian</label><br>
            <input type="text" class="form-control" name="varian" value="{{old('varian',$product->varian)}}">
        </div>
        <div class="form-group">
            <label>Description</label><br>
            <input type="text" class="form-control" name="description" value="{{old('description',$product->description)}}">
        </div>
        <input type="submit" name="submit">
    </div>

@endsection