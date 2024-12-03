<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionStatus extends Model
{
    protected $table = 'transaction_status';
    protected $primaryKey = 'TransacStatus_ID ';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable = [
        'TransacStatus_ID ',
        'Transac_ID',
        // 'Transac_status',
        'TransacStatus_name',
        'TransacStatus_datetime'
    ];
}
