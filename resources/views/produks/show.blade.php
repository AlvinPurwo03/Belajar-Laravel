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
            <h2>Show Product</h2>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScPEZDyoGg9BcGs2BLxoYBjoTLUQQmJob1JCUrhZ99bQ&s" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$data->nama_produk}} </h5>
                    <p class="card-text"> {{$data->jumlah}} </p>
                    <p class="card-text"> {{$data->tgl_produksi}} </p>
                    <p class="card-text"> {{$data->tgl_produksi}} </p>
                    <p class="card-text"> {{$data->merek->nama_merek}} </p>
                    <a href="/produk" class="btn btn-primary">Back</a>
                </div>
                </div>
            </div>
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