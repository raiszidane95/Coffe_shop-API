<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-auto">
        <h1>Tambah Produk</h1>
        <form action="/products" method="post">
        @csrf
            Nama Produk : <input type="text" name="nama"> <br>
            Deskripsi : <input type="text" name="deskripsi"> <br>
            Harga : <input type="text" name="harga" id=""> <br>
            gambar : <input type="text" name="img_url" id=""> <br>
            <input type="submit" value="simpan">
        </form>
        <a href="/products">Kembali</a>
    </div>
</body>