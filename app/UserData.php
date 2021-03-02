<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserData extends Model
{
    use SoftDeletes;

    
    
    protected $fillable = [
        'name', 'identity_card', 'phone', 'room_number',
        'checkin', 'checkout', 'duration', 'tagihan', 'alamat', 'RT', 'RW', 'kelurahan',
        'kecamatan', 'kabupaten', 'provinsi', 'negara'
    ];

    // protected $hidden = [

    //];
}
