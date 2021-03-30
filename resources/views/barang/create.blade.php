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
				<h2>Data Barang</h2>
                <p></p>
			</div>
         </div>

            <form method="post" action="/barang"> 
            @csrf
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" placeholder="Kode Barang" name="kode_barang">
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="kategori_barang">Kategori Barang</label>
                <input type="text" class="form-control" id="kategori_barang" placeholder="Kategori Barang" name="kategori_barang">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
            </div>
            <div class="form-group">
                <label for="qty"> Qty</label>
                <input type="text" class="form-control" id="qty" placeholder="Qty" name="qty">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
                        
		</div>
	</div>
</div>		
@endsection