<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitSize extends Model
{
    use HasFactory;

    public $table = "unit_size";

    protected $fillable = [
        'name', 'status',
    ];

}