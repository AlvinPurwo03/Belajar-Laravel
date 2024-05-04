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
            <th>Nama Barang</th>
            <th>Nama Pembeli</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $transaksi)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $transaksi->id }}</td>
            <td>{{ $transaksi->barang->nama_barang}}</td>
            <td>{{ $transaksi->pembeli->nama_pembeli}}</td>
            <td>{{ $transaksi->jumlah}}</td>
            <td>{{ $transaksi->tanggal}}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>