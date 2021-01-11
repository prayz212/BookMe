<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class RoomType extends Model
{
    use HasFactory;

    protected $table = "room_type";

    public function room() {
        return $this->hasMany('Room', 'id_type', 'id');
    }
}
