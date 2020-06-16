<!DOCTYPE html>
<html>
<head>
	<title>Tugas 10</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1>Data Produk</h1>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
					  Add Data
				</button>
			</div>
		</div>

		<table class="table table-hover table-sm">
			<tr>
				<th>Nama Produk</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Action</th>
			</tr>

			@foreach($data_produk as $produk)
			<tr>
				<td>{{$produk-> nama_produk}}</td>
				<td>{{$produk-> keterangan}}</td>
				<td>{{$produk-> harga}}</td>
				<td>{{$produk-> jumlah}}</td>
				<td>
					<a href="/produk/{{$produk->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
					<a href="/produk/{{$produk->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
				</td>
			</tr>
			@endforeach
		</table>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			    <div class="modal-content">
				    <div class="modal-header">
					    <h5 class="modal-title" id="exampleModalLabel">Add Data Produk</h5>
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
					    </button>
					</div>
					<div class="modal-body">
					<form action="/produk/create" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<label for="namaProduk">Nama Produk</label>
							<input name="nama_produk" type="text" class="form-control" id="namaProduk">
						</div>
						<div class="form-group">
						    <label for="keterangan">Keterangan</label>
						    <input name="keterangan" type="text" class="form-control" id="keterangan">
						</div>
						<div class="form-group">
						    <label for="harga">Harga</label>
						    <input name="harga" type="text" class="form-control" id="harga">
						</div>
						<div class="form-group">
							<label for="jumlah">Jumlah</label>
							<input name="jumlah" type="text" class="form-control" id="jumlah">
						</div>
							
					    </div>
					    <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save</button>
					    </div>
				    </form>
				</div>
			</div>
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