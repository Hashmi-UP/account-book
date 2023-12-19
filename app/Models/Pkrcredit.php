<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkrcredit extends Model
{
    use HasFactory;
    protected $table="pkrcredit";
    protected $fillable=['sender_name','reciver_name','sended_amount','credit_amount', 'sender_phone'];
}
