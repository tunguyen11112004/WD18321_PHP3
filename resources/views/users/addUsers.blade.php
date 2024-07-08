<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h3>Thêm mới Users</h3>
    <form action="{{ route('users.addPostUsers') }}" method="post">
        @csrf
        <div class="mb-9">
            <label for="nameUsers" class="form-label">Name</label>
            <input type="text" id="nameUsers" name="nameUsers">
        </div>
        <div class="mb-6">
            <label for="emailUsers" class="form-label">Email</label>
            <input type="text" id="emailUsers" name="emailUsers">
        </div>
        <div class="mb-6">
            <label for="phongbanUser" class="form-label">Phòng ban</label>
            <select name="phongbanUser" >
                @foreach ($phongban as $value)
                    <option value="{{ $value->id }}">{{ $value->ten_donvi }}</option>
                @endforeach
            </select>
            <div class="mb-6">
                <label for="tuoiUsers" class="form-label">Tuổi</label>
                <input type="text" id="tuoiUsers" name="tuoiUsers">
            </div>
        </div>
        <button type="submit">Thêm mới</button>
    </form>
</body>

</html>
