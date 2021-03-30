@extends('barang.layout')
@section('content')
<!-- portfolio header section -->
<div id="portfolio-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12"></div>
		</div>
	</div>
</div>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
    <div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Edit Data Barang</h2>
                <p></p>
			</div>
         </div>

            <form method="post" action="{{ route('barang.update', $tb_barang->kode_barang) }}"> 
            @csrf
            @method('PUT')
            <div class="form-group"> 
                <label for="kode_barang">Kode Barang</label> 
                <input type="text" name="kode_barang" class="form-control" id="kode_barang" value="{{ $tb_barang->kode_barang }}" aria-describedby="kode_barang" > 
            </div>
            <div class="form-group"> 
                <label for="nama_barang">Nama Barang</label> 
                <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $tb_barang->nama_barang }}" aria-describedby="nama_barang" > 
            </div>
            <div class="form-group"> 
                <label for="kategori_barang">Kategori Barang</label> 
                <input type="text" name="kategori_barang" class="form-control" id="kategori_barang" value="{{ $tb_barang->kategori_barang }}" aria-describedby="kategori_barang" > 
            </div>
            <div class="form-group"> 
                <label for="harga">Harga</label> 
                <input type="text" name="harga" class="form-control" id="harga" value="{{ $tb_barang->harga }}" aria-describedby="harga" > 
            </div>
            <div class="form-group"> 
                <label for="qty">Harga</label> 
                <input type="text" name="qty" class="form-control" id="qty" value="{{ $tb_barang->qty }}" aria-describedby="qty" > 
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
                        
		</div>
	</div>
</div>		
@endsection