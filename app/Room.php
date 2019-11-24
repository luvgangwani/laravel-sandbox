<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //

    public function scopeByType($query, $roomTypeId = null) {
        if (!is_null($roomTypeId))
            $query->where('room_type_id', $roomTypeId);

        return $query;
    }
}
