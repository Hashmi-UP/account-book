<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aedconverted extends Model
{
    use HasFactory;
    protected $table="aedconverter";
    protected $fillable=['sender_name','sender_phone', 'reciever_name', 'reciever_phone', 'city', 'aed_amount', 'service_charge', 'net_amount', 'amount', 'pkr_convert_total', 'credit_amount', 'aed_rate'];

}
