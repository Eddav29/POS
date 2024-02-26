<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat datang di Point of Sales!</h1>
    
   
    <ul>
        <li><a href="{{ route('products.index') }}">Daftar Produk</a></li>
        <li><a href="{{ route('sales.index') }}">Halaman Penjualan</a></li>
        <li><a href="{{ route('user.show', ['id' => 1, 'name' => 'John']) }}">Profil Pengguna</a></li>
    </ul>
</body>
</html>
