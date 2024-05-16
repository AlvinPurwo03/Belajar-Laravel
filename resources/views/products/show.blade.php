@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Brand</div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label class="form-label">Name Product</label>
                            <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}" disabled>
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}" disabled>
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{ $product->name_product }}" disabled>
                            <label class="form-label">Name Brand</label>
                            <input type="text" class="form-control" name="id_brand" value="{{ $product->brand->name_brand }}" disabled>
                        </div>
                            <a href="{{ url('product') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
