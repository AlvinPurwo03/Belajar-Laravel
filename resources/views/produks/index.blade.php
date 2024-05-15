    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <title>Hello, world!</title>
    </head>
    <body>

{{-- AWAL NAVBAR --}}
    @include('layouts.navbar')
{{-- AKHIR NAVBAR --}}

{{-- AWAL CONTENT --}}
    <div class="section">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <h2>List Product</h2>
        </div>
        <div class="row mt-5">

            @foreach ($data as $produk)
                
            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/indizone/2021/09/07/o8sZ4v4/mulai-tahun-2035-hyundai-cuma-akan-jual-kendaraan-listrik-di-eropa41.jpg" class="card-img-top" alt="...">
                <div class="card-body" align="center">
                    <h1 class="card-text"> {{$produk->nama_produk}} </h1>
                    <a href="produk/{{$produk->id}}" class="btn btn-primary">Go</a>
                </div>
                </div>
            </div>

            @endforeach
            
        </div>
    </div>
</div>
{{-- AKHIR CONTENT --}}

{{-- AWAL FOOTER --}}
    @include('layouts.footer')
{{-- AKHIR FOOTER --}}

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
    </html>