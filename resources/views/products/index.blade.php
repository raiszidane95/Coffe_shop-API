
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Produk</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h3>Data Produk</h3>
				<br/>
                <a href="/products/create" class="btn btn-light btn-sm">Tambah Produk</a>
				<table class="table table-bordered">
					<tr>
						<th>Nama Produk</th>
						<th>Deskripsi</th>
						<th>Harga</th>
						<th>Gambar</th>
						<th>Opsi</th>
					</tr>
                    <php? @foreach($products as $product) >
					<tr>
						<td>{{$product->nama}}</td>
						<td>{{$product->deskripsi}}</td>
						<td>{{$product->harga}}</td>
						<td>{{$product->img_url}}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/products/{{$product->id}}/edit">Edit</a>
							<form action="/products/{{$product->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus">
                            </form>
						</td>
                    </tr>
                    <php? @endforeach >
				</table>
			</div>
		</div>
	</div>


</body>
</html>
