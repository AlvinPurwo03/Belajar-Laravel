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
            <th>Nama</th>
            <th>Jumlah</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $barang)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->jumlah }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>