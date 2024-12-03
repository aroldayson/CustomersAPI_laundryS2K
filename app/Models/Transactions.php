<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'Transac_ID';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable = [
        // 'Transac_ID',
        'Cust_ID',
        'Admin_ID',
        'Transac_date',
        'Transac_status',
        'Tracking_number',
        'Received_datetime',
        'Released_datetime'
    ];
}
