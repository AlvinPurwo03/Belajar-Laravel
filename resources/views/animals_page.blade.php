<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Raja Hewan : {{ $king }} <br>
    Daftar Hewan :
    @foreach ($hewan as $data)
        @if($data == "Tiger")
            <li>{{ $data }} - Dia hewan buas</li>
        @else
            <li>{{ $data }}</li>
        @endif
    @endforeach
</body>
</html>