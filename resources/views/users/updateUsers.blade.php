<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h3>Update Users</h3>
    <form action="{{ route('users.updatePostUsers') }}" method="post">
        @csrf
        @foreach ($update as $value)
            <div class="mb-6">
                <label for="nameUsers" class="form-label">Name</label>
                <input type="text" id="nameUsers" name="nameUsers" value="{{ $value->name }}">
            </div>
            <div class="mb-6">
                <label for="emailUsers" class="form-label">Email</label>
                <input type="text" id="emailUsers" name="emailUsers" value="{{ $value->email }}">
            </div>
            <div class="mb-6">
                <label for="phongbanUser" class="form-label">Phòng ban</label>
                <select name="phongbanUser">
                    <option value="{{ $value->id }}">{{ $value->ten_donvi }}</option>
                    <option value="1">Ban giám hiệu</option>
                    <option value="2">Ban đào tạo</option>
                    <option value="3">Ban phát triển chương trình</option>
                </select>
                <div class="mb-6">
                    <label for="tuoiUsers" class="form-label">Tuổi</label>
                    <input type="text" id="tuoiUsers" name="tuoiUsers" value="{{ $value->tuoi }}">
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn success">Cập nhật</button>
    </form>
</body>

</html>
