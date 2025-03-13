<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Metadata</h3>
    {{-- <ul>
        @foreach (json_decode($product->metadata ?? '[]', true) as $meta)
            <li>{{ $meta['name'] ?? 'N/A' }} - {{ $meta['role'] ?? 'N/A' }}</li>
        @endforeach
    </ul> --}}
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Metadata</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                @php
                    $metadata = json_decode($product->metadata, true);
                @endphp
                <ul>
                    @foreach ($metadata as $meta)
                        <li>{{ $meta['name'] }} - {{ $meta['role'] }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </table>


</body>
</html>
