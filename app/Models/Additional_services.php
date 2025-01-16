<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Additional_services extends Model
{
    protected $table = 'additional_services';
    protected $primaryKey = 'AddService_ID';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable = [
        'AddService_ID',
        'Transac_ID',
        'AddService_name',
        'AddService_price',
        'CustAdd_ID'
    ];
}
