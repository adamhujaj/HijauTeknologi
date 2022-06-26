@extends('template')
  @section('title')
		product
  @endsection
@section('conten')
<div class="container">
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
              </div>
			  @foreach($products as $p)
<form method="post">

{{ csrf_field() }}

    <div class="card-body">

	<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama Barang <input type="text" required="required" name="namabarang" value="{{ $p->namabarang }}"> <br/>
		Harga Barang <input type="number" required="required" name="hargabarang" value="{{ $p->hargabarang }}"> <br/>
	</form>
	@endforeach
        <input type="submit" name="submit">
    </div>

@endsection