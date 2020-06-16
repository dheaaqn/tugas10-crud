<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h4>Edit Data Produk</h4>
		<div class="row">
			<div class="col-lg-12">
				<form action="/produk/{{$produk->id}}/update" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label for="namaProduk">Nama Produk</label>
					<input name="nama_produk" type="text" class="form-control" id="namaProduk" value="{{$produk->nama_produk}}">
				</div>
				<div class="form-group">
				    <label for="keterangan">Keterangan</label>
				    <input name="keterangan" type="text" class="form-control" id="keterangan" value="{{$produk->keterangan}}">
				</div>
				<div class="form-group">
				    <label for="harga">Harga</label>
				    <input name="harga" type="text" class="form-control" id="harga" value="{{$produk->harga}}">
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah</label>
					<input name="jumlah" type="text" class="form-control" id="jumlah" value="{{$produk->jumlah}}">
				</div>
			    <button type="submit" class="btn btn-primary">Edit</button>
			</form>
		</div>
		@if(session('success'))
			<div class="alert alert-success" role="alert">
				{{session('success')}}
			</div>
		@endif
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>