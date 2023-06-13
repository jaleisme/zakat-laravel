<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['muzakki_id', 'payment_type_id', 'amil_id', 'amount', 'number_of_person'];
    protected $table = 'payment';
}
