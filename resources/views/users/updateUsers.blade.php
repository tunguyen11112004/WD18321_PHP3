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
        <input type="hidden" value="{{ $update->id }}" name="idUsers" id="">
        <div class="mb-6">
            <label for="nameUsers" class="form-label">Name</label>
            <input type="text" id="nameUsers" name="nameUsers" value="{{ $update->name }}">
        </div>
        <div class="mb-6">
            <label for="emailUsers" class="form-label">Email</label>
            <input type="text" id="emailUsers" name="emailUsers" value="{{ $update->email }}">
        </div>
        <div class="mb-6">
            <label for="phongbanUser" class="form-label">Phòng ban</label>
            <select name="phongbanUser">
                @foreach ($update as $value)
                    
                    <option
                    @if ($update->phongban_id === $value->id)
                        selected
                    @endif
                    value="{{ $value->id }}">{{ $value->ten_donvi }}</option>
                @endforeach
            </select>
            <div class="mb-6">
                <label for="songaynghiUser" class="form-label">Số ngày nghỉ</label>
                <input type="text" id="songaynghiUser" name="songaynghiUser" value="{{ $update->songaynghi }}">
            </div>
            <div class="mb-6">
                <label for="tuoiUsers" class="form-label">Tuổi</label>
                <input type="text" id="tuoiUsers" name="tuoiUsers" value="{{ $update->tuoi }}">
            </div>
        </div>
        <button type="submit" class="btn btn success">Cập nhật</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
