<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUser()
    {
        // $users = [
        //     [
        //         'id' => '1',
        //         'name' => 'tu'
        //     ],
        //     [
        //         'id' => '2',
        //         'name' => 'long'
        //     ],
        // ];

        // return view('list-user')->with([
        //     'users' => $users
        // ]);


        //Lấy danh sách toàn bộ user ( select * form users)
        // $listUsers = DB::table('users')->get();
        // dd($listUsers);

        //lấy thông tin user có id = 4 ( select * form users where id = 4)
        // $result = DB::table('users')->where('id', '=', '4')->first();
        // $result = DB::table('users')->find('4');//chỉ dùng với id


        //Lấy thuộc tính 'name' của user có id = 16
        // $result = DB::table('users')->where('id', '=', '16')->value('name');

        //Lấy danh sách id của phòng ban 'Ban giám hiệu'
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', '%Ban giám hiệu%')
        //     ->value('id');
        // $result = DB::table('users')->where('phongban_id', $idPhongBan)->pluck('id');

        // Tìm user có độ tuổi lớn nhất trong công ty 
        // $result = DB::table('users')
        //     ->where('tuoi', DB::table('users')->max('tuoi'))
        //     ->get();

        // Tìm user có độ tuổi nhỏ nhất trong công ty
        // $result = DB::table('users')
        //     ->where('tuoi', DB::table('users')->min('tuoi'))
        //     ->get();

        //Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', '%Ban giám hiệu%')
        //     ->value('id');
        // $result = DB::table('users')->where('phongban_id', $idPhongBan)->count('id');

        //Lấy danh sách tuổi các user 
        // $result = DB::table('users')->distinct()->pluck('tuoi');

        //Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $result = DB::table('users')
        //     ->where('name','like', '%Khải')
        //     ->orWhere('name','like', '%Thanh')
        //     ->get();

        //Lấy danh sách user ở phòng ban 'Ban đào tạo'
        // $userPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', '%Ban đào tạo%')
        //     ->value('id');
        // $result = DB::table('users')
        //     ->where('phongban_id', $userPhongBan)
        //     ->select('id', 'name', 'email')
        //     ->get();

        // Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $result = DB::table('users')
        //     ->where('tuoi','>=', '30')
        //     ->select('id', 'name', 'tuoi')
        //     ->orderBy('tuoi', 'asc') //mặc định tăng dần ko có cũng dc
        //     ->get();

        //Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $result = DB::table('users')
        //     ->select('id', 'name', 'tuoi')
        //     ->orderBy('tuoi', 'desc')
        //     ->offset(5)
        //     ->limit(10)
        //     ->get();

        //Thêm một user mới vào công ty
        // $data =[
        //     'name' => 'Nguyễn Anh Tú',
        //     'email' => 'tunaph41592@fpt.edu.vn',
        //     'phongban_id' => '1',
        //     'songaynghi' => '0',
        //     'tuoi' => '20',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ];
        // DB::table('users')->insert($data);

        //Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', '%Ban đào tạo%')
        //     ->value('id');
        // $result = DB::table('users')
        //     ->where('phongban_id', $idPhongBan)
        //     ->select('id', 'name', 'email')
        //     ->get();

        // foreach ($result as $value) {
        //     DB::table('users')->where('id', $value->id)->update([
        //         'name' => $value->name . 'PĐT'
        //     ]);
        // }

        //Xóa user nghỉ quá 15 ngày
        // DB::table('users')->where('songaynghi', '>', '15')->delete();
        // dd($result);
    }

    // function getUser($id, $name = 'null')
    // {
    //     echo $id;
    //     echo $name;
    // }

    // function updateUser(Request $request)
    // {
    //     echo $request->id;
    //     echo $request->name;
    // }

    // function thongtinsv()
    // {
    //     $thongtinsv = [
    //         [
    //             'id' => '1',
    //             'name' => 'Nguyễn Anh Tú',
    //             'interest' => 'Nghe nhạc',
    //             'major' => 'Lập trình web',
    //             'age' => '20',
    //             'address' => 'Phúc thọ - Hà Nội',
    //         ],
    //         [
    //             'id' => '2',
    //             'name' => 'Vũ Quang Trung',
    //             'interest' => 'Nghe nhạc',
    //             'major' => 'Lập trình web',
    //             'age' => '20',
    //             'address' => 'Nam Định',
    //         ],
    //     ];

    //     return view('thong-tin-sv')->with([
    //         'sv' => $thongtinsv
    //     ]);
    // }

    public function listUsers()
    {
        $listUsers = DB::table('users')
            ->join('phongban', 'phongban.id', '=', 'users.phongban_id')
            ->select('users.id', 'users.name', 'users.email', 'users.phongban_id', 'phongban.ten_donvi')
            ->get();
        return view('users/listUsers')->with([
            'listUsers' => $listUsers
        ]);
    }

    public function addUsers()
    {
        $phongban = DB::table('phongban')->select('id', 'ten_donvi')->get();
        return view('users/addUsers')->with([
            'phongban' => $phongban
        ]);
    }

    public function addPostUsers(Request $req)
    {
        $data = [
            'name' => $req->nameUsers,
            'email' => $req->emailUsers,
            'phongban_id' => $req->phongbanUser,
            'tuoi' => $req->touiUsers,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        DB::table('users')->insert($data);

        return redirect()->route('users.listUsers');
    }

    public function deleteUsers($idUser){
        DB::table('users')->where('id', $idUser)->delete();
        return redirect()->route('users.listUsers');
    }

    public function updateUsers($idUser)
    {
        $update = DB::table('users')
        ->where('users.id', $idUser)
        ->join('phongban', 'phongban.id', '=', 'users.phongban_id')
            ->select('users.id', 'users.name', 'users.email', 'users.phongban_id', 'phongban.ten_donvi', 'tuoi')
            ->get();
        return view('users/updateUsers')->with([
            'update' => $update
        ]);
        
        
    }

    public function updatePostUsers(Request $req, $idUser)
    {
        
    }
        
}


 
