@extends('admin.layouts.index');

@section('title')
    @parent
    Update sản phẩm
@endsection

@push('styles')
    <Style>
        .img-product {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </Style>
@endpush

@section('content')
    <div class="container">
        <h3>Upfate Product</h3>
        <form action="{{ route('admin.product.updatePatchProduct', $product->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="nameProducts" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="nameProducts" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
                <label for="priceProducts" class="form-label">Giá sản phẩm</label>
                <input type="text" class="form-control" name="priceProducts" value="{{ $product->price }}">
            </div>
            <div class="mb-3">
                <label for="imageProduct" class="form-label">Image</label><br>
                <img src="{{ asset($product->image) }}" alt="" class="img-product">
                <input type="file" name="imageProduct" class="form-control" accept="/image">

            </div>
            <button type="submit" class="btn btn-success">Chỉnh sửa</button>
        </form>
        <a class="btn btn-info" href="{{ route('admin.product.listProduct') }}">Quay lại</a>

    </div>
@endsection

@push('scripts')
@endpush
