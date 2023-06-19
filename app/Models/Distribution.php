<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['mustahik_id', 'amount_money', 'amount_rice', 'notes', 'distributed_at', 'status'];
    protected $table = 'distribution';
}
