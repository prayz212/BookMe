<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomepageController;
use App\Models\Room;
use App\Models\RoomType;

Route::get('/', function () {
    return redirect('/home');
});

Route::prefix('home')->group(function () {
    Route::get('', [HomepageController::class, 'ShowHomePage']);

    Route::get('location/{search_key}', function($search_key) {
        return 'home/location with param: ' . $search_key;
    });
});

Route::get('city/item', [HomepageController::class, 'ShowRoomList']);

Route::get("/city/ha-noi", function () {
    return "this is hanoi";
});

Route::get("/city/ho-chi-minh", function () {
    return "this is hcm";
});

Route::get('test', function() {
    $room = new App\Models\Room();
    $room->room_name = 'name';
    $room->room_type = 'type';
    $room->num_bedroom = 3;
    $room->rating_star = 5.0;

    $room->save();
});