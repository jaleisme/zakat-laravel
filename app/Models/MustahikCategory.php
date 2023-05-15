<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MustahikCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['category_name', 'description', 'percentage'];
    protected $table = 'mustahik_category';
}
