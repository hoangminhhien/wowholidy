<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'id', 'nameSaler', 'teamSaler', 'typeCustomer', 'typeCombo', 'contactCode', 'nameCustomer', 'phoneCustomer', 'mailCustomer', 'country', 'airLine', 'hotel', 'other', 'payment', 'countValue', 'status', 'airlineStatus', 'hotelStatus', 'otherStatus', 'statusAir', 'statusHotel', 'statusOther', 'listCustomer', 'codeCombo', 'levelOrder', 'ctkm', 'adult', 'children', 'baby'
    ];
    protected $casts = [
        'airLine' => 'array',
        'hotel' => 'array',
        'other' => 'array',
        'payment' => 'array',
        'listCustomer' => 'array'
    ];
    public $timestamps = true;
    public function margin(){
        return $this->hasOne('App\Models\Margin', 'id_order', 'id');
    }

}
