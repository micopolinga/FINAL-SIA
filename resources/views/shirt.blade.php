@extends('welcome')

@section('content')

<style>

    .container {
        margin-top: 20px;
    }

    .flex {
        display: flex;
        gap: 2rem;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    .table th,
    .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .qr-code-cell {
        width: 150px;
    }
    body{
        background-color: rgb(82, 82, 82);
    }

    .export-button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-bottom: 10px;
        cursor: pointer;
        border-radius: 4px;
    }
    .csv-button {
        background-color: #0d09da;
        border: none;
        color: white;
        padding: 10px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-bottom: 10px;
        cursor: pointer;
        border-radius: 4px;
    }
    .csv-button:hover{
        background-color: #1b3cd1;
    }


    .export-button:hover {
        background-color: #45a049;
    }
</style>

<div class="container mt-4">
    <div class="flex gap-2">
        <form action="{{ route('shirts.import.csv') }}" method="POST" enctype="multipart/form-data" style="display: inline-block;">
            @csrf
            <input type="file" name="csv_file" style="margin-right: 5px;">
            <button type="submit" class="button-50 btn btn-primary import-csv-btn">Import CSV</button>
        </form>
        <a href="/shirts/pdf" class="export-button">Export</a>
        <a href="/shirts/csv-all" class="csv-button" >CSV</a>
        <a href="{{ route('scanner') }}" class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-2">
            <svg id="Layer_1" data-name="Layer 1" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.61 122.88" style="width: 20px; height: 20px;">
                <title>scan</title>
                <path d="M23.38,0h13V11.15h-13a12.22,12.22,0,0,0-8.64,3.57l0,0a12.22,12.22,0,0,0-3.57,8.64V39.32H0V23.38A23.32,23.32,0,0,1,6.86,6.89l0,0A23.31,23.31,0,0,1,23.38,0ZM3.25,54.91H119.36a3.29,3.29,0,0,1,3.25,3.27V64.7A3.29,3.29,0,0,1,119.36,68H3.25A3.28,3.28,0,0,1,0,64.7V58.18a3.27,3.27,0,0,1,3.25-3.27ZM90.57,0h8.66a23.28,23.28,0,0,1,16.49,6.86v0a23.32,23.32,0,0,1,6.87,16.52V39.32H111.46V23.38a12.2,12.2,0,0,0-3.6-8.63v0a12.21,12.21,0,0,0-8.64-3.58H90.57V0Zm32,81.85V99.5a23.46,23.46,0,0,1-23.38,23.38H90.57V111.73h8.66A12.29,12.29,0,0,0,111.46,99.5V81.85Zm-86.23,41h-13A23.32,23.32,0,0,1,6.86,116l-.32-.35A23.28,23.28,0,0,1,0,99.5V81.85H11.15V99.5a12.25,12.25,0,0,0,3.35,8.41l.25.22a12.2,12.2,0,0,0,8.63,3.6h13v11.15Z"/>
            </svg>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>QR Code</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shirts as $shirt)
                    <tr>
                        <td class="qr-code-cell">{!! QrCode::size(100)->generate(Request::url() . '/shirts/' . $shirt->id) !!}</td>
                        <td>{{ $shirt->name }}</td>
                        <td>{{ $shirt->type }}</td>
                        <td>${{ number_format($shirt->price, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
