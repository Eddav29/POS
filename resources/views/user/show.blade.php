<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
</head>
<body>
    <h1>Profil Pengguna</h1>
    
    <!-- Menampilkan informasi pengguna -->
    <p>ID Pengguna: {{ $id }}</p>
    <p>Nama Pengguna: {{ $name }}</p>
    
    <!-- Tambahkan link kembali ke halaman utama -->
    <p><a href="{{ url('/') }}">Kembali ke Halaman Utama</a></p>
</body>
</html>
