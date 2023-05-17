<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_type extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'payment_type';
    public $timestamps = false;
}
