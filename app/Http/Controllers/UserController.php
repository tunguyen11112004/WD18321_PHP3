<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser()
    {
        $users = [
            [
                'id' => '1',
                'name' => 'tu'
            ],
            [
                'id' => '2',
                'name' => 'long'
            ],
        ];

        return view('list-user')->with([
            'users' => $users
        ]);
    }

    function getUser($id, $name = 'null')
    {
        echo $id;
        echo $name;
    }

    function updateUser(Request $request)
    {
        echo $request->id;
        echo $request->name;
    }

    function thongtinsv()
    {
        $thongtinsv = [
            [
                'id' => '1',
                'name' => 'Nguyễn Anh Tú',
                'interest' => 'Nghe nhạc',
                'major' => 'Lập trình web',
                'age' => '20',
                'address' => 'Phúc thọ - Hà Nội',
            ],
            [
                'id' => '2',
                'name' => 'Vũ Quang Trung',
                'interest' => 'Nghe nhạc',
                'major' => 'Lập trình web',
                'age' => '20',
                'address' => 'Nam Định',
            ],
        ];

        return view('thong-tin-sv')->with([
            'sv' => $thongtinsv
        ]);
    }

}
