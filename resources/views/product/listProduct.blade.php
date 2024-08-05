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
        <a href="{{ route('product.addProduct') }}" class="btn btn-primary">Thêm mới</a>

        <h3>Danh sách Product</h3>
        <form action="{{ route('product.timKiemProduct') }}" method="GET">
            <div class="mb-6">
                <label for="nameProduct" class="form-label">Tìm Kiếm</label>
                <input type="search" class="form-control" name="nameProduct">
            </div>

        </form>

        <table class="table table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Loại</th>
                <th>Price</th>
                <th>View</th>
                <th>Thao tác</th>
            </thead>
            <tbody>
                @foreach ($listProduct as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->category_name }}</td>
                        <td style="color: red">{{ $value->price }}</td>
                        <td>{{ $value->view }}</td>
                        <td>
                            <a href="{{ route('product.updateProduct', $value->id) }}" class="btn btn-info">Chỉnh
                                sửa</a>
                            <a href="{{ route('product.deleteProduct', $value->id) }}"
                                onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
