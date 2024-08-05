@extends('admin.layouts.index');

@push('styles')
@endpush

@section('title')
    @parent
    Thêm mới sản phẩm
@endsection

@section('content')
    <div class="container">
        <h3>Thêm Mới Product</h3>
        <form action="{{ route('admin.product.addPostProduct') }}" method="post" 
        enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nameProducts" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="nameProducts" placeholder="Tên sản phẩm">
            </div>
            <div class="mb-3">
                <label for="priceProducts" class="form-label">Giá sản phẩm</label>
                <input type="text" class="form-control" name="priceProducts" placeholder="Giá sản phẩm">
            </div>
            <div class="mb-3">
                <label for="imageProduct" class="form-label">Image</label>
                <input type="file" name="imageProduct" class="form-control" accept="/image">
                
            </div>
            <button type="submit" class="btn btn-success">Thêm mới</button>
        </form>
    </div>
@endsection

@push('scripts')
@endpush
