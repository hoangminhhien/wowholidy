<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Margin extends Model
{
    protected $table = 'margin';
    protected $fillable = [
        'id', 'id_order', 'airLine', 'hotel', 'other', 'countAirline', 'countHotel', 'countOther', 'count'
    ];
    protected $casts = [
        'airLine' => 'array',
        'hotel' => 'array',
        'other' => 'array',
        'countAirline' => 'array',
        'countHotel' => 'array',
        'countOther' => 'array',
        'count' => 'array',
    ];
    public $timestamps = true;
}
