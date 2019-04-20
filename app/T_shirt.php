<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_shirt extends Model
{
    public function getPriceAttribute($value)
    {
        return sprintf('%s р.',$value);
    }
}
