<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <ul>
        <li><a href="{{ route('category.food_beverage') }}">Food & Beverage</a></li>
        <li><a href="{{ route('category.beauty_health') }}">Beauty & Health</a></li>
        <li><a href="{{ route('category.home_care') }}">Home Care</a></li>
        <li><a href="{{ route('category.baby_kid') }}">Baby & Kid</a></li>
    </ul>
    
</body>
</html>
