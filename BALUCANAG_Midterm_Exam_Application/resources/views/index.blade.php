<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Movie List</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['title'] }}</td>
            <td>{{ $product['genre'] }}</td>
            <td>{{ $product['rating'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>