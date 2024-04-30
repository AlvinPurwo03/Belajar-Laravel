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
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Telepon</th>
            <th>Email</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $siswa)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $siswa->id }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->jenis_kelamin }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->agama }}</td>
            <td>{{ $siswa->telepon }}</td>
            <td>{{ $siswa->email }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>