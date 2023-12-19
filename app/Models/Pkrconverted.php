<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkrconverted extends Model
{
    use HasFactory;
    protected $table="pkrconverter";
    protected $fillable=['sender_name','sender_phone', 'reciever_name', 'reciever_phone', 'city', 'pkr_amount', 'service_charge', 'net_amount', 'amount', 'aed_convert_total', 'credit_amount', 'pkr_rate'];

}
