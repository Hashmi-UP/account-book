<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    protected $table="credit";
    protected $fillable=['sender_name','reciver_name','sended_amount','credit_amount', 'reciver_phone'];

}
