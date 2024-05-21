@extends('welcome')

@section('content')

<style>
    body {
        background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/86b595da-7311-4bbd-83ca-22acfb31a01b/d3c1oqx-6b84f7d4-692d-449f-b617-758699a61a48.png/v1/fill/w_900,h_720,q_80,strp/carhartt_by_tegibaby_d3c1oqx-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NzIwIiwicGF0aCI6IlwvZlwvODZiNTk1ZGEtNzMxMS00YmJkLTgzY2EtMjJhY2ZiMzFhMDFiXC9kM2Mxb3F4LTZiODRmN2Q0LTY5MmQtNDQ5Zi1iNjE3LTc1ODY5OWE2MWE0OC5wbmciLCJ3aWR0aCI6Ijw9OTAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.beYnoFVNE-WIKVsWIY40s1ZtvT-HEGA19YkoFl3Guf4');
        background-size: cover;
        background-position: center;
        background-color:transparent;
    }

    .home-section {
        color: rgb(0, 0, 0);
        text-align: center;
        padding: 100px 0;
    }

    .home-section h1 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .home-section p {
        font-size: 1.2rem;
        margin-bottom: 40px;
    }

    .sidebar {
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="home-section">
                <h1>Thrift Store</h1>
                <p>A thrift store is a retail establishment typically run by a charitable organization to sell used goods at discounted prices. Thrift stores offer a wide range of products, including clothing, furniture, books, and household items, all of which are donated by individuals or businesses. Shopping at thrift stores not only saves money but also promotes sustainability by giving items a second chance and reducing waste.</p>
            </div>
        </div>
    </div>
</div>

@endsection
