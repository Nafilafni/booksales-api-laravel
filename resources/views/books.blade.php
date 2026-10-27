<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <h1>Ini adalah halaman Book</h1>

    @foreach ($books as $book)
        <ul>
            <li>{{ $book['title'] }}</li>
            <li>{{ $book['description'] }}</li>
            <li>Rp {{ number_format($book['price'], 0, ',', '.') }}</li>
            <li>Stok: {{ $book['stock'] }}</li>
            <li>{{ $book['cover_photo'] }}</li>
            <li>Genre ID: {{ $book['genre_id'] }}</li>
            <li>Author ID: {{ $book['author_id'] }}</li>
        </ul>
    @endforeach
</body>
</html>