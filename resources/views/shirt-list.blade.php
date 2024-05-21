<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirt List</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif; /* This font is good for PDFs handling UTF-8 characters */
            color: #333;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .shirt-qrcode {
            text-align: center;
        }
        .shirt-title {
            font-size: 18px;
            margin-bottom: 5px;
        }
        .shirt-price {
            font-size: 16px;
            color: #555;
        }
        .no-shirts {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Shirt List</h1>
        </div>
        @if(count($shirts) > 0)
        <table>
            <thead>
                <tr>
                    <th>QrCode</th>
                    <th>Shirt ID</th>
                    <th>Shirt Name</th>
                    <th>type</th>
                    <th>Price</th>

                </tr>
            </thead>
            <tbody>
                @foreach($shirts as $shirt)
                <tr>
                    <td><img src="data:image/png;base64,{{ base64_encode(QrCode::size(80)->generate($shirt->id)) }}" alt="QR Code"></td>
                    <td>{{ $shirt->id }}</td>
                    <td>{{ $shirt->name }}</td>
                    <td>{{ $shirt->type}}</td>
                    <td>${{ number_format($shirt->price, 2) }}</td>
                    {{-- <p class="product-qrcode">{!! QrCode::size(100)->generate(Request::url() . '/products/' . $product->id) !!}</p> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="no-shirts">No shirts found.</p>
        @endif
    </div>
</body>
</html>
