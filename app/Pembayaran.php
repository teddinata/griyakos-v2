<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembayaran extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'transactions_id', 'foto', 'bank', 'nama', 'rekening', 'tanggal_transfer', 'total'
    ];

    protected $hidden = [

    ];


    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
}
