<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h3>Update Product</h3>
        <form action="{{ route('product.updatePostProduct') }}" method="post">
            @csrf
            <input type="hidden" name="idProduct" value="{{ $product->id }}">
            <div class="mb-3">
                <label for="nameProducts" class="form-label">Name</label>
                <input type="text" class="form-control" name="nameProducts" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
                <label for="categoryProducts" class="form-label">Category</label>
                <select name="categoryProducts" class="form-control">
                    @foreach ($category as $value)
                        <option
                            @if ($product->category_id === $value->id) 
                                selected 
                            @endif 
                            value="{{ $value->id }}">
                                {{ $value->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="priceProducts" class="form-label">Price</label>
                <input type="text" class="form-control" name="priceProducts" value="{{ $product->price }}">
            </div>
            <div class="mb-3">
                <label for="ViewProducts" class="form-label">View</label>
                <input type="text" class="form-control" name="viewProducts" value="{{ $product->view }}">
            </div>
            <button type="submit" class="btn btn-success">Chỉnh sửa</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
