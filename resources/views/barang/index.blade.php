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
                <a href="{{ route('barang.create') }}" clas="btn btn-primary">Tambah Data</a>
                @if (session('status')) 
                <div class="alert alert-success"> 
                    <p>{{ session('status')}}</p> 
                </div>
                 @endif
                <p></p>
			</div>
         </div>

		<div class="row mt-10">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col-6"  class="">ID Barang</th>
                <th scope="col"  class="">Kode Barang</th>
                <th scope="col"  class="">Nama Barang</th>
                <th scope="col"  class="">Harga</th>
                <th scope="col"  class="">Qty</th>
                <th scope="col"  class="">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tb_barang as $brg)
                <tr>
                    <td>{{ $brg-> id_barang}}</td>
                    <td>{{ $brg-> kode_barang}}</td>
                    <td>{{ $brg-> nama_barang}}</td>
                    <td>{{ $brg-> harga}}</td>
                    <td>{{ $brg-> qty}}</td>
                    <td>
                   <a href="{{ route('barang.edit',$brg->kode_barang) }}" clas="badge bagde-success">Edit</a>
                    <a href="{{ route('barang.destroy',$brg->id_barang) }}" clas="badge bagde-danger">Delete</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
            
		</div>
	</div>
</div>		
@endsection