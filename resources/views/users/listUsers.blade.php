<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('users.addUsers') }}">Thêm mới</a>
    <h3>Danh sách Users</h3>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phòng ban</th>
            <th>Hành động</th>
        </thead>
        <tbody>
            @foreach ($listUsers as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->ten_donvi }}</td>
                    <td>
                        <a href="{{ route('users.deleteUsers', $value->id) }}">Xóa</a> |
                        <a href="{{ route('users.updateUsers', $value->id) }}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>