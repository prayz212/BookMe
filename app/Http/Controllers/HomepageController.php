<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use DB;
use Carbon\Carbon;

class HomepageController extends Controller
{
    public function ShowHomePage() {

        $slick_1 = DB::table('slick')
                    ->join('session', 'slick.id_session', '=', 'session.id')
                    ->where('id_session', '=', 1)
                    ->select('session.*', 'slick.*')
                    ->get();

        $slick_2 = DB::table('slick')
                    ->join('session', 'slick.id_session', '=', 'session.id')
                    ->where('id_session', '=', 2)
                    ->select('session.*', 'slick.*')
                    ->get();

        $slick_3 = DB::table('slick')
                    ->join('session', 'slick.id_session', '=', 'session.id')
                    ->where('id_session', '=', 3)
                    ->select('session.*', 'slick.*')
                    ->get();

        // $test = $slick_1->toArray();
        // return var_dump($test);

        return view('homepage', [
            'slick_1' => $slick_1,
            'slick_2' => $slick_2,
            'slick_3' => $slick_3
        ]);
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
