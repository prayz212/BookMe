<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use DB;
use Carbon\Carbon;

class HomepageController extends Controller
{
    public function ShowHomePage() {
        return "THIS IS HOMEPAGE";
        // $province = array('Hồ Chí Minh', 'Hà Nội', 'Đà Nẵng', 'Vũng Tàu', 'Nha Trang', 'Huế', 'Quảng Ninh', 'Đà Lạt');
        // $sai_gon_special = array('Gần trung tâm', 'Cho cặp đôi', 'Giá tốt bất ngờ', 'Triệu view đẹp', 'Bể bơi & BBQ', 'Siêu ưu đãi');
        // $vung_tau_speacial = array('Cho cặp đôi', 'Cho nhóm đông', 'Siêu ưu đãi', 'Gần bãi sau', 'Gần bãi trước', 'Giá dưới 1 triệu');

        // $slick_1 = new SpecialThings('Địa điểm nổi bật', 'Cùng Luxstay bắt đầu chuyến hành trình chinh phục thế giới của bạn.', $province);
        // $slick_2 = new SpecialThings('Vòng vòng phố thị Sài Gòn', 'Top chỗ ở sạch đep, giá tốt tại TP.Hồ Chí Minh cho chuyến du lịch và công tác của bạn.', $sai_gon_special);
        // $slick_3 = new SpecialThings('Lượn quanh biển lớn Vũng Tàu', 'Đổi gió cùng bạn bè hoặc người thân tại thành phố biển Vũng Tàu xinh đẹp.', $vung_tau_speacial);

        // return view('homepage', [ 'slick_1' => $slick_1,
        //                           'slick_2' => $slick_2,
        //                           'slick_3' => $slick_3,
        //                           ]);
    }

    public function ShowRoomList() {
        $data = DB::table('room')
                ->join('room_type', 'room.id_type', '=', 'room_type.id')
                ->join('room_statements', 'room.id', '=', 'room_statements.id_room')
                ->select('room.*', 'room_type.name as type', 'room_statements.discount as discount', 'room_statements.price as price', 'room_statements.date as date')
                ->where('date',  '=', date("d/m/Y"))
                ->get();
        return view('item', ['list' => $data]);
    }
}
