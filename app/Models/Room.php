<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $table = 'room';

    public function room_type() {
        return $this->belongsTo('App\Models\RoomType', 'id', 'id_type');
    }
}
