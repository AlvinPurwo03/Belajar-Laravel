<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1 align="center">
        
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Tanggal Produksi</th>
            <th>Nama Merek</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $produk)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->nama_produk}}</td>
            <td>{{ $produk->jumlah}}</td>
            <td>{{ $produk->tgl_produksi}}</td>
            <td>{{ $produk->merek->nama_merek}}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>